<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WasabiService
{
    protected function disk()
    {
        config([
            'filesystems.disks.wasabi' => [
                'driver' => 's3',
                'key' => config('wasabi.access_key'),
                'secret' => config('wasabi.secret_key'),
                'region' => config('wasabi.region'),
                'bucket' => config('wasabi.bucket'),
                'endpoint' => config('wasabi.endpoint'),
                'url' => config('wasabi.url'),
                'use_path_style_endpoint' => true,
            ],
        ]);

        return Storage::disk('wasabi');
    }

    public function uploadFile(UploadedFile $file, $directory, $prefix = 'file')
    {
        $directory = trim((string) $directory, '/');
        $filename = $prefix.'-'.time().'-'.Str::random(10).'.'.$file->getClientOriginalExtension();

        $this->disk()->putFileAs(
            $directory,
            $file,
            $filename,
            [
                'ContentType' => $file->getMimeType(),
            ]
        );

        return $directory.'/'.$filename;
    }

    public function uploadAvatar(UploadedFile $file)
    {
        return $this->uploadFile(
            $file,
            config('wasabi.avatar_directory', 'images/avatar'),
            'user'
        );
    }

    public function uploadDataUrl(string $dataUrl, string $directory, string $prefix = 'file', ?string $originalName = null): ?string
    {
        if (! preg_match('/^data:(?<mime>[-\w.+\/]+);base64,(?<data>.+)$/', $dataUrl, $matches)) {
            return null;
        }

        $binary = base64_decode($matches['data'], true);

        if ($binary === false) {
            return null;
        }

        $mimeType = $matches['mime'] ?? 'application/octet-stream';
        $extension = $this->guessExtension($mimeType, $originalName);
        $tempPath = tempnam(sys_get_temp_dir(), 'wasabi_upload_');

        if ($tempPath === false) {
            return null;
        }

        file_put_contents($tempPath, $binary);

        $uploadedFile = new UploadedFile(
            $tempPath,
            $originalName ?: $prefix.'.'.$extension,
            $mimeType,
            null,
            true
        );

        try {
            return $this->uploadFile($uploadedFile, $directory, $prefix);
        } finally {
            if (is_file($tempPath)) {
                @unlink($tempPath);
            }
        }
    }

    public function temporaryUrl($fileUrl, $expirationMinutes = 10080)
    {
        $path = $this->extractPath($fileUrl);

        if (! $path) {
            return null;
        }

        return $this->disk()->temporaryUrl(
            $path,
            now()->addMinutes($expirationMinutes)
        );
    }

    public function publicUrl($fileUrl, ?string $directory = null): ?string
    {
        if (empty($fileUrl)) {
            return null;
        }

        if (filter_var($fileUrl, FILTER_VALIDATE_URL)) {
            return $fileUrl;
        }

        $path = ltrim((string) $fileUrl, '/');
        $directory = trim((string) $directory, '/');

        if ($directory !== '' && ! Str::startsWith($path, $directory.'/')) {
            $path = $directory.'/'.$path;
        }

        $baseUrl = rtrim((string) config('wasabi.url'), '/');

        if ($baseUrl === '') {
            return null;
        }

        $encodedPath = implode('/', array_map('rawurlencode', explode('/', $path)));

        return $baseUrl.'/'.$encodedPath;
    }

    public function displayUrl($fileUrl, ?string $directory = null, int $expirationMinutes = 10080): ?string
    {
        $path = $this->pathWithDirectory($fileUrl, $directory);

        if (! $path) {
            return null;
        }

        try {
            return $this->temporaryUrl($path, $expirationMinutes);
        } catch (\Throwable) {
            return $this->publicUrl($path);
        }
    }

    public function deleteFile($fileUrl)
    {
        $path = $this->extractPath($fileUrl);

        if ($path && $this->disk()->exists($path)) {
            $this->disk()->delete($path);
        }
    }

    public function extractPath($fileUrl)
    {
        if (empty($fileUrl)) {
            return null;
        }

        if (filter_var($fileUrl, FILTER_VALIDATE_URL)) {
            $path = ltrim(parse_url($fileUrl, PHP_URL_PATH) ?? '', '/');
            $bucket = trim((string) config('wasabi.bucket'), '/');

            if ($bucket !== '' && Str::startsWith($path, $bucket.'/')) {
                return Str::after($path, $bucket.'/');
            }

            return $path ?: null;
        }

        return ltrim((string) $fileUrl, '/');
    }

    private function pathWithDirectory($fileUrl, ?string $directory = null): ?string
    {
        if (empty($fileUrl)) {
            return null;
        }

        if (filter_var($fileUrl, FILTER_VALIDATE_URL)) {
            return $this->extractPath($fileUrl);
        }

        $path = ltrim((string) $fileUrl, '/');
        $directory = trim((string) $directory, '/');

        if ($directory !== '' && ! Str::startsWith($path, $directory.'/')) {
            return $directory.'/'.$path;
        }

        return $path;
    }

    private function guessExtension(string $mimeType, ?string $originalName = null): string
    {
        $extension = $originalName ? pathinfo($originalName, PATHINFO_EXTENSION) : '';

        if ($extension !== '') {
            return strtolower($extension);
        }

        return match ($mimeType) {
            'image/jpeg', 'image/jpg' => 'jpg',
            'image/png' => 'png',
            'image/webp' => 'webp',
            'application/pdf' => 'pdf',
            default => 'bin',
        };
    }
}
