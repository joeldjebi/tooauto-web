<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'NOS OFFRES - TOOAUTO SARL' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .font-handwriting {
            font-family: 'Brush Script MT', cursive;
        }
        .poste-card {
            transition: all 0.3s ease;
        }
        .poste-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
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
<body class="bg-gray-50">
    <!-- Section Hero -->
    <section class="bg-custom-orange py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-6">
                <img src="https://tooauto.com/images/logo_tooauto_pro.png" alt="TOOAUTO SARL Logo" class="mx-auto h-20 lg:h-24 object-contain">
            </div>
            <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6">
                <span class="font-handwriting">NOS OFFRES</span>
            </h1>
            <p class="text-xl text-white mb-4">
                Découvrez toutes nos opportunités de carrière
            </p>
            <a href="/recrutements" class="inline-block bg-custom-yellow text-custom-black px-6 py-2 rounded-full font-semibold hover:bg-custom-black hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl">
                <i class="fas fa-arrow-left mr-2"></i>
                Retour à la page recrutements
            </a>
        </div>
    </section>

    <!-- Section des postes -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-12">
                
                @php
                    // Fonction pour obtenir les classes de badge selon la catégorie
                    function getBadgeClasses($categorie) {
                        $badges = [
                            'Management' => 'bg-blue-100 text-blue-800',
                            'Vente' => 'bg-green-100 text-green-800',
                            'Digital' => 'bg-purple-100 text-purple-800',
                            'Audiovisuel' => 'bg-red-100 text-red-800',
                            'Présentation' => 'bg-pink-100 text-pink-800',
                            'Service Client' => 'bg-indigo-100 text-indigo-800',
                            'Direction' => 'bg-yellow-100 text-yellow-800',
                            'Design' => 'bg-teal-100 text-teal-800',
                        ];
                        return $badges[$categorie] ?? 'bg-gray-100 text-gray-800';
                    }
                    
                    // Fonction pour obtenir l'icône selon la catégorie
                    function getBadgeIcon($categorie) {
                        $icons = [
                            'Management' => 'fa-briefcase',
                            'Vente' => 'fa-handshake',
                            'Digital' => 'fa-share-alt',
                            'Audiovisuel' => 'fa-video',
                            'Présentation' => 'fa-microphone',
                            'Service Client' => 'fa-phone',
                            'Direction' => 'fa-user-tie',
                            'Design' => 'fa-palette',
                        ];
                        return $icons[$categorie] ?? 'fa-briefcase';
                    }
                @endphp
                
                @foreach($postes as $index => $poste)
                @php
                    // Convertir les chaînes séparées par des points-virgules en tableaux
                    $missions = !empty($poste->missions) ? explode(';', $poste->missions) : [];
                    $profilRecherche = !empty($poste->profil_rechercher) ? explode(';', $poste->profil_rechercher) : [];
                    $competences = !empty($poste->competence_requises) ? explode(';', $poste->competence_requises) : [];
                    $prerequis = !empty($poste->prerequis) ? explode(';', $poste->prerequis) : [];
                    
                    // Nettoyer les éléments (supprimer les espaces en début/fin)
                    $missions = array_map('trim', $missions);
                    $profilRecherche = array_map('trim', $profilRecherche);
                    $competences = array_map('trim', $competences);
                    $prerequis = array_map('trim', $prerequis);
                @endphp
                <!-- Poste {{ $index + 1 }}: {{ $poste->titre }} -->
                <div class="bg-white rounded-2xl shadow-lg p-8 poste-card">
                    <div class="flex items-start justify-between mb-6">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-2">{{ $index + 1 }}. {{ $poste->titre }}</h2>
                            <span class="inline-block {{ getBadgeClasses($poste->categorie) }} px-4 py-1 rounded-full text-sm font-semibold">
                                <i class="fas {{ getBadgeIcon($poste->categorie) }} mr-2"></i>{{ $poste->categorie }}
                            </span>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                            Description du poste
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $poste->description }}
                        </p>
                    </div>

                    @if(!empty($missions))
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-tasks text-green-600 mr-2"></i>
                            Missions principales
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach($missions as $mission)
                            @if(!empty(trim($mission)))
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span>{{ trim($mission) }}</span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(!empty($profilRecherche))
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-user text-purple-600 mr-2"></i>
                            Profil recherché
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach($profilRecherche as $profil)
                            @if(!empty(trim($profil)))
                            <li class="flex items-start">
                                <i class="fas fa-graduation-cap text-purple-500 mr-3 mt-1"></i>
                                <span>{{ trim($profil) }}</span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(!empty($competences))
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-cogs text-orange-600 mr-2"></i>
                            Compétences requises
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($competences as $competence)
                            @if(!empty(trim($competence)))
                            <span class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm">{{ trim($competence) }}</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if(!empty($prerequis))
                    <div class="mt-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-list-check text-custom-orange mr-2"></i>
                            Pré-requis
                        </h3>
                        <ul class="space-y-2 text-gray-700">
                            @foreach($prerequis as $prerequi)
                            @if(!empty(trim($prerequi)))
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-custom-orange mr-3 mt-1"></i>
                                <span>{{ trim($prerequi) }}</span>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Bouton Postuler -->
                    <div class="mt-6 text-center">
                        <a href="/candidature?poste={{ urlencode($poste->titre) }}" class="inline-block bg-custom-yellow text-custom-black px-8 py-3 rounded-full font-bold text-lg hover:bg-custom-orange hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Postuler pour ce poste
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Section texte en dessous de la liste -->
            <div class="mt-12 text-center">
                <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
                    Rejoignez l'équipe et participez à la révolution numérique du secteur automobile
                </p>
            </div>

            <!-- Section CTA -->
            <div class="mt-16 bg-custom-yellow rounded-2xl p-12 text-center shadow-xl">
                <h2 class="text-3xl lg:text-4xl font-bold text-custom-black mb-6">
                    Intéressé par l'un de ces postes ?
                </h2>
                <p class="text-xl text-custom-black mb-8 max-w-3xl mx-auto">
                    Rejoignez l'équipe TOOAUTO SARL et participez à la révolution numérique du secteur automobile
                </p>
                <a href="/recrutements" class="inline-block bg-custom-black text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Retour à la page recrutements
                </a>
            </div>
        </div>
    </section>
</body>
</html>
