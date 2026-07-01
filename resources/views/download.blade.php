@extends('layouts.app')

@section('title', 'Télécharger TOOAUTO')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Téléchargez <span class="text-blue-600">TOOAUTO</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Disponible sur iOS et Android. Installez l'application et transformez votre expérience automobile dès aujourd'hui.
            </p>
        </div>
    </div>
</section>

<!-- Boutons de téléchargement -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- App Store -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="w-20 h-20 bg-black rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">App Store</h3>
                <p class="text-gray-600 mb-6">Téléchargez TOOAUTO sur votre iPhone ou iPad</p>
                <a target="_blank" href="https://apps.apple.com/ci/app/tooauto/id6743125856" class="inline-block bg-black text-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-800 transition-colors duration-200">
                    Télécharger sur l'App Store
                </a>
            </div>

            <!-- Google Play -->
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-lg transition-shadow duration-300">
                <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Google Play</h3>
                <p class="text-gray-600 mb-6">Téléchargez TOOAUTO sur votre appareil Android</p>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.tooauto.androidApp" class="inline-block bg-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-green-700 transition-colors duration-200">
                    Télécharger sur Google Play
                </a>
            </div>
        </div>

        <!-- QR Code -->
        <div class="bg-gray-50 rounded-2xl p-8 max-w-md mx-auto">
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Ou scannez le QR code</h3>
            <div class="bg-white rounded-lg p-4 inline-block">
                <div class="w-32 h-32 bg-gray-200 rounded flex items-center justify-center">
                    <img src="{{ asset('images/qr-code.png') }}" alt="QR Code TOOAUTO" class="w-24 h-24">
                </div>
            </div>
            <p class="text-sm text-gray-600 mt-4">Scannez avec votre appareil photo pour télécharger directement</p>
        </div>
    </div>
</section>

<!-- Fonctionnalités après téléchargement -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Après le téléchargement
            </h2>
            <p class="text-xl text-gray-600">
                Découvrez comment commencer à utiliser TOOAUTO
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    1
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Créez votre compte</h3>
                <p class="text-gray-600">Inscrivez-vous en quelques secondes avec votre email ou numéro de téléphone</p>
            </div>

            <div class="text-center">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    2
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Ajoutez votre véhicule</h3>
                <p class="text-gray-600">Saisissez les informations de votre véhicule pour un suivi personnalisé</p>
            </div>

            <div class="text-center">
                <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    3
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Profitez des services</h3>
                <p class="text-gray-600">Accédez à toutes les fonctionnalités et bénéficiez des offres partenaires</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Prêt à commencer ?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Téléchargez TOOAUTO maintenant et rejoignez plus de 50 000 automobilistes satisfaits
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                Télécharger maintenant
            </a>
            <a href="{{ route('features') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200">
                En savoir plus
            </a>
        </div>
    </div>
</section>
@endsection
