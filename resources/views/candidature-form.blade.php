<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de candidature - TOOAUTO SARL</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .font-handwriting {
            font-family: 'Brush Script MT', cursive;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        .bg-custom-yellow {
            background-color: #f9b118;
        }
        .bg-custom-orange {
            background-color: #dc6218;
        }
        .bg-custom-black {
            background-color: #000000;
        }
        .text-custom-yellow {
            color: #f9b118;
        }
        .text-custom-orange {
            color: #dc6218;
        }
    </style>
</head>
<body style="background-color: #f3f4f6; margin: 0; padding: 0;">
    <!-- Section Hero -->
    <section class="bg-custom-orange py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <img src="https://tooauto.com/images/logo_tooauto_pro.png" alt="TOOAUTO SARL Logo" class="mx-auto h-20 lg:h-24 object-contain">
            <h1 class="text-3xl lg:text-5xl font-bold text-white mb-4">
                <span class="font-handwriting">Formulaire de candidature</span>
            </h1>
            @if(!empty($poste))
                <p class="text-lg text-white">
                    Poste : {{ $poste }}
                </p>
            @endif
        </div>
    </section>

    <!-- Section Formulaire -->
    <section class="py-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Champ caché pour le poste -->
                    @if(!empty($poste))
                        <input type="hidden" name="poste" value="{{ $poste }}">
                    @endif

                    <!-- Nom -->
                    <div class="mb-6">
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">
                            Nom <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="nom" name="nom" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               value="{{ old('nom') }}"
                               placeholder="Votre nom">
                    </div>

                    <!-- Prénoms -->
                    <div class="mb-6">
                        <label for="prenoms" class="block text-sm font-medium text-gray-700 mb-2">
                            Prénoms <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="prenoms" name="prenoms" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               value="{{ old('prenoms') }}"
                               placeholder="Vos prénoms">
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               value="{{ old('email') }}"
                               placeholder="votre.email@example.com">
                    </div>

                    <!-- Contact Mobile (WhatsApp) -->
                    <div class="mb-6">
                        <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">
                            Contact Mobile (WhatsApp) <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="mobile" name="mobile" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               value="{{ old('mobile') }}"
                               placeholder="+225 XX XX XX XX XX">
                    </div>

                    <!-- Commune de résidence -->
                    <div class="mb-6">
                        <label for="commune" class="block text-sm font-medium text-gray-700 mb-2">
                            Commune de résidence <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="commune" name="commune" required maxlength="100"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               value="{{ old('commune') }}"
                               placeholder="Votre commune de résidence">
                    </div>

                    <!-- Photo -->
                    <div class="mb-6">
                        <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">
                            Photo
                        </label>
                        <input type="file" id="photo" name="photo" accept="image/*"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="mt-2 text-sm text-gray-500">
                            Formats acceptés : JPG, PNG, GIF (taille maximale : 2MB)
                        </p>
                    </div>

                    <!-- CV -->
                    <div class="mb-6">
                        <label for="cv" class="block text-sm font-medium text-gray-700 mb-2">
                            CV (PDF, DOC, DOCX - Max 5MB) <span class="text-red-500">*</span>
                        </label>
                        <input type="file" id="cv" name="cv" required accept=".pdf,.doc,.docx"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="mt-2 text-sm text-gray-500">
                            Formats acceptés : PDF, DOC, DOCX (taille maximale : 5MB)
                        </p>
                    </div>

                    <!-- Lettre de motivation -->
                    <div class="mb-6">
                        <label for="lm" class="block text-sm font-medium text-gray-700 mb-2">
                            Lettre de motivation (PDF, DOC, DOCX - Max 5MB)
                        </label>
                        <input type="file" id="lm" name="lm" accept=".pdf,.doc,.docx"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="mt-2 text-sm text-gray-500">
                            Formats acceptés : PDF, DOC, DOCX (taille maximale : 5MB) - Optionnel
                        </p>
                    </div>

                    <!-- Boutons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center mt-8">
                        <a href="/postes" class="inline-block bg-custom-yellow text-custom-black px-6 py-2 rounded-full font-semibold hover:bg-custom-black hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Retour aux postes
                        </a>
                        <button type="submit"
                                class="bg-custom-yellow text-custom-black px-8 py-3 rounded-full font-bold text-lg hover:bg-custom-orange hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Envoyer ma candidature
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

