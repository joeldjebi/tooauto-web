@extends('layouts.app')

@section('title', 'TOOAUTO - Votre compagnon automobile numérique')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 py-24">
    <!-- Background Elements with Parallax -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20 parallax-bg"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full blur-3xl parallax-element" data-speed="0.5"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-indigo-500/20 to-cyan-500/20 rounded-full blur-3xl parallax-element" data-speed="0.3"></div>

    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-4 h-4 bg-tooauto-orange rounded-full opacity-60 animate-float"></div>
    <div class="absolute top-40 right-20 w-6 h-6 bg-yellow-400 rounded-full opacity-40 animate-float-delayed"></div>
    <div class="absolute bottom-40 left-20 w-3 h-3 bg-white rounded-full opacity-50 animate-float-slow"></div>
    <div class="absolute top-60 left-1/3 w-5 h-5 bg-cyan-400 rounded-full opacity-30 animate-float"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-300 text-sm font-medium mb-6 animate-fade-in-up" data-delay="200">
                    <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 animate-pulse"></span>
                    Nouvelle version disponible
                </div>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight animate-fade-in-up" data-delay="400">
                     <span class="text-tooauto-orange animate-glow typewriter" style="display: inline-block;">Mon assistant</span> automobile
                </h1>
                <p class="text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl animate-fade-in-up" data-delay="600">
                    TOOAUTO révolutionne la gestion automobile avec une interface intuitive et des fonctionnalités intelligentes.
                    Transformez votre expérience au volant dès aujourd'hui.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in-up" data-delay="800">
                    <a href="{{ route('download') }}" class="magnetic liquid-button group relative bg-tooauto-orange text-white px-8 py-4 rounded-2xl font-semibold hover:bg-tooauto-black transition-all duration-300 text-center shadow-lg hover:shadow-tooauto-orange/25 hover:-translate-y-1 animate-bounce-gentle">
                        <span class="relative z-10">Télécharger l'app</span>
                        <div class="absolute inset-0 bg-tooauto-orange rounded-2xl blur opacity-0 group-hover:opacity-75 transition-opacity duration-300"></div>
                    </a>
                    <a href="{{ route('features') }}" class="magnetic group border-2 border-white/20 text-white px-8 py-4 rounded-2xl font-semibold hover:bg-white/10 hover:border-white/40 transition-all duration-300 text-center backdrop-blur-sm">
                        Découvrir les fonctionnalités
                        <svg class="inline-block ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="relative animate-fade-in-right" data-delay="1000">
                <div class="bg-white rounded-2xl shadow-2xl p-8 transform rotate-3 hover:rotate-0 transition-transform duration-300 animate-phone-float">
                    <div class="bg-gray-100 rounded-lg p-4 mb-4">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-semibold text-gray-900">Ma Peugeot 308</h3>
                                <span class="text-green-600 text-sm font-medium">✓ À jour</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Assurance</span>
                                    <span class="text-sm text-gray-500">Expire dans 45 jours</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Visite technique</span>
                                    <span class="text-sm text-orange-600">Dans 2 mois</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Vidange</span>
                                    <span class="text-sm text-green-600">Récente</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Éléments décoratifs -->
                <div class="absolute -top-4 -right-4 w-8 h-8 bg-blue-500 rounded-full opacity-20"></div>
                <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-green-500 rounded-full opacity-20"></div>
            </div>
        </div>
    </div>
</section>

<!-- Section Vidéo -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23de5f0c" fill-opacity="0.03"%3E%3Cpath d="M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z"/%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 animate-fade-in-up">
                Découvrez <span class="text-tooauto-orange">TOOAUTO</span> en action
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up" data-delay="200">
                Voyez comment TOOAUTO transforme votre expérience automobile au quotidien
            </p>
        </div>

        <div class="relative max-w-5xl mx-auto">
            <!-- Video Cover Container -->
            <div class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 rounded-3xl overflow-hidden shadow-2xl animate-fade-in-up" data-delay="400">
                <!-- Background Image avec overlay -->
                <div class="aspect-video relative bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
                    <!-- Overlay sombre -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

                    <!-- Contenu du cover -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-8">
                        <!-- Icône automobile -->
                        <div class="w-20 h-20 bg-tooauto-orange/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 animate-pulse">
                            <svg class="w-10 h-10 text-tooauto-orange" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.92,6.01C18.72,5.42 18.16,5 17.5,5H6.5C5.84,5 5.28,5.42 5.08,6.01L3,12V20A1,1 0 0,0 4,21H5A1,1 0 0,0 6,20V19H18V20A1,1 0 0,0 19,21H20A1,1 0 0,0 21,20V12L18.92,6.01M6.5,6.5H17.5L19,12H5L6.5,6.5M7,13.5A1.5,1.5 0 0,1 8.5,15A1.5,1.5 0 0,1 7,16.5A1.5,1.5 0 0,1 5.5,15A1.5,1.5 0 0,1 7,13.5M17,13.5A1.5,1.5 0 0,1 18.5,15A1.5,1.5 0 0,1 17,16.5A1.5,1.5 0 0,1 15.5,15A1.5,1.5 0 0,1 17,13.5Z"/>
                            </svg>
                        </div>

                        <!-- Titre -->
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
                            Découvrez <span class="text-tooauto-orange">TOOAUTO</span> en action
                        </h3>

                        <!-- Description -->
                        <p class="text-lg text-gray-300 mb-8 max-w-2xl">
                            Voyez comment notre application révolutionne la gestion automobile avec des fonctionnalités intelligentes et une interface intuitive
                        </p>

                        <!-- Bouton Play -->
                        <button onclick="playVideo()" class="group relative bg-tooauto-orange hover:bg-tooauto-black text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 shadow-2xl hover:shadow-tooauto-orange/25 hover:-translate-y-1">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                                <span>Voir la démonstration</span>
                            </div>
                        </button>

                        <!-- Durée de la vidéo -->
                        <div class="mt-4 flex items-center space-x-2 text-gray-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/>
                            </svg>
                            <span class="text-sm">2:30</span>
                        </div>
                    </div>
                </div>

                <!-- Badge TOOAUTO -->
                <div class="absolute top-4 right-4 bg-tooauto-orange text-white px-3 py-1 rounded-full text-sm font-semibold">
                    TOOAUTO
                </div>

                <!-- Badge "Nouveau" -->
                <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold animate-pulse">
                    ✨ Nouveau
                </div>
            </div>

            <!-- Container pour la vidéo (caché par défaut) -->
            <div id="videoContainer" class="hidden absolute inset-0 bg-black rounded-3xl overflow-hidden shadow-2xl z-10">
                <div class="aspect-video">
                    <iframe
                        id="videoFrame"
                        class="w-full h-full rounded-3xl"
                        src=""
                        title="Démonstration TOOAUTO - Gestion automobile intelligente"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Floating Elements around video -->
            <div class="absolute -top-4 -left-4 w-8 h-8 bg-tooauto-orange rounded-full opacity-60 animate-float"></div>
            <div class="absolute -bottom-4 -right-4 w-6 h-6 bg-yellow-400 rounded-full opacity-50 animate-float-delayed"></div>
            <div class="absolute top-1/2 -left-8 w-4 h-4 bg-cyan-400 rounded-full opacity-40 animate-float-slow"></div>
        </div>
    </div>
</section>

<!-- Valeurs ajoutées -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Pourquoi choisir <span class="text-tooauto-orange">TOOAUTO</span> ?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Découvrez les avantages qui font de TOOAUTO le choix évident pour tous les automobilistes
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Simplicité -->
            <div class="text-center group">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-200 transition-colors duration-200">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Simplicité</h3>
                <p class="text-gray-600">Tout ce qui concerne votre voiture réuni dans une seule application intuitive</p>
            </div>

            <!-- Sécurité -->
            <div class="text-center group">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-200 transition-colors duration-200">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Sécurité</h3>
                <p class="text-gray-600">Données protégées et sauvegardées automatiquement avec chiffrement de niveau bancaire</p>
            </div>

            <!-- Tranquillité -->
            <div class="text-center group">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-200 transition-colors duration-200">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12.828 7H4.828z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Tranquillité</h3>
                <p class="text-gray-600">Rappels automatiques pour assurance, visite technique et entretien</p>
            </div>

            <!-- Fiabilité -->
            <div class="text-center group">
                <div class="bg-orange-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-200 transition-colors duration-200">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Fiabilité</h3>
                <p class="text-gray-600">Partenaires certifiés et services validés pour garantir une qualité optimale</p>
            </div>
        </div>
    </div>
</section>
<!-- Modules -->
<section class="py-20 bg-white" id="modules">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Les modules <span class="text-tooauto-orange">TOOAUTO</span> ?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Découvrez les modules qui font de TOOAUTO le choix évident pour tous les automobilistes
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categorie_services as $index => $categorie)
                @php
                    // Définir les couleurs et icônes pour chaque catégorie
                    $colors = [
                        'from-blue-50 to-indigo-100' => 'bg-blue-600',
                        'from-green-50 to-emerald-100' => 'bg-green-600',
                        'from-purple-50 to-violet-100' => 'bg-purple-600',
                        'from-orange-50 to-amber-100' => 'bg-orange-600',
                        'from-red-50 to-pink-100' => 'bg-red-600',
                        'from-gray-50 to-slate-100' => 'bg-gray-600',
                        'from-yellow-50 to-yellow-100' => 'bg-yellow-600',
                        'from-teal-50 to-teal-100' => 'bg-teal-600',
                        'from-indigo-50 to-indigo-100' => 'bg-indigo-600'
                    ];

                    $icons = [
                        'fas fa-cogs', 'fas fa-tools', 'fas fa-handshake', 'fas fa-mobile-alt',
                        'fas fa-star', 'fas fa-shield-alt', 'fas fa-car', 'fas fa-wrench',
                        'fas fa-bell', 'fas fa-truck', 'fas fa-file-alt', 'fas fa-phone',
                        'fas fa-bolt', 'fas fa-store', 'fas fa-building', 'fas fa-shield-check',
                        'fas fa-stethoscope', 'fas fa-tv', 'fas fa-info-circle', 'fas fa-exclamation-triangle',
                        'fas fa-question-circle', 'fas fa-calendar-alt', 'fas fa-tags', 'fas fa-mobile'
                    ];

                    $colorClass = array_values($colors)[$index % count($colors)];
                    $gradientClass = array_keys($colors)[$index % count($colors)];
                    $iconClass = $icons[$index % count($icons)];
                @endphp

                <div class="bg-gradient-to-br {{ $gradientClass }} p-8 rounded-2xl card-hover">
                    <div class="w-16 h-16 {{ $colorClass }} rounded-2xl flex items-center justify-center mb-6 overflow-hidden">
                        @if($categorie->image)
                            @php
                                $categorieImageUrl = app(\App\Services\WasabiService::class)
                                    ->displayUrl($categorie->image, 'images/categorie_service');
                            @endphp
                            @if($categorieImageUrl)
                                <img src="{{ $categorieImageUrl }}"
                                     alt="{{ $categorie->libelle }}"
                                     class="w-full h-full object-cover">
                            @else
                                <i class="{{ $iconClass }} text-2xl text-white"></i>
                            @endif
                        @else
                            <i class="{{ $iconClass }} text-2xl text-white"></i>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $categorie->libelle }}</h3>
                    <p class="text-gray-600">
                        @if($categorie->description)
                            {{ $categorie->description }}
                        @else
                            Découvrez nos services {{ strtolower($categorie->libelle) }} pour une expérience automobile optimale.
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Acteurs -->
<section class="py-20 bg-white" id="acteurs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Les acteurs de TOOAUTO
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Marques, entreprises et institutions qui nous font confiance
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 lg:gap-8">
            @if(isset($acteurs) && $acteurs->count() > 0)
                @foreach($acteurs as $acteur)
                    @php
                        $logoUrl = $acteur->logo ? 'https://super-admin.tooauto.com/images/acteurs/' . $acteur->logo : null;
                        $hoverClasses = [
                            'hover:border-orange-400',
                            'hover:border-yellow-400',
                            'hover:border-red-400',
                            'hover:border-blue-400',
                            'hover:border-green-400',
                            'hover:border-purple-400',
                            'hover:border-indigo-400',
                            'hover:border-pink-400',
                            'hover:border-teal-400',
                            'hover:border-gray-400',
                        ];
                        $bgClasses = [
                            'bg-orange-500',
                            'bg-yellow-400',
                            'bg-red-600',
                            'bg-blue-600',
                            'bg-green-600',
                            'bg-purple-600',
                            'bg-indigo-600',
                            'bg-pink-500',
                            'bg-teal-500',
                            'bg-gray-600',
                        ];
                        $colorIndex = ($acteur->id - 1) % count($hoverClasses);
                        $hoverClass = $hoverClasses[$colorIndex];
                        $bgClass = $bgClasses[$colorIndex];
                    @endphp
                    <div class="bg-white rounded-xl p-6 flex flex-col items-center justify-center group hover:shadow-xl transition-all duration-300 border border-gray-200 {{ $hoverClass }}">
                        @if($acteur->siteweb)
                            <a href="{{ $acteur->siteweb }}" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center w-full">
                        @endif
                        <div class="w-24 h-24 mb-4 flex items-center justify-center">
                            @if($logoUrl)
                                <img src="{{ $logoUrl }}" alt="{{ $acteur->name }}" class="max-w-full max-h-full object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            @endif
                            <div class="w-24 h-24 {{ $bgClass }} rounded-lg flex items-center justify-center text-white font-bold text-sm text-center px-2" style="display: {{ $logoUrl ? 'none' : 'flex' }};">
                                {{ strtoupper(substr($acteur->name, 0, 4)) }}
                            </div>
                        </div>
                        <p class="text-sm font-semibold text-gray-800 text-center">{{ $acteur->name }}</p>
                        @if($acteur->siteweb)
                            </a>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500">Aucun acteur disponible pour le moment.</p>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Fonctionnalités principales -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Tout ce dont vous avez besoin
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Gestion complète de votre véhicule en quelques clics
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Gestion du véhicule -->
            <div class="flip-card h-80">
                <div class="flip-card-inner">
                    <div class="flip-card-front bg-white rounded-xl p-8 shadow-lg">
                        <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Gestion du véhicule</h3>
                        <p class="text-gray-600 mb-4">Centralisez toutes les informations de votre véhicule : caractéristiques, historique, documents importants.</p>
                        <div class="text-center mt-8">
                            <span class="text-blue-600 text-sm font-medium">Survolez pour en savoir plus</span>
                        </div>
                    </div>
                    <div class="flip-card-back bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-8 shadow-lg text-white">
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Fonctionnalités détaillées</h3>
                        <ul class="text-sm space-y-2">
                            <li>• Fiche technique complète</li>
                            <li>• Historique des réparations</li>
                            <li>• Stockage des documents</li>
                            <li>• Photos et vidéos</li>
                            <li>• Notifications personnalisées</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Carnet d'entretien -->
            <div class="flip-card h-80">
                <div class="flip-card-inner">
                    <div class="flip-card-front bg-white rounded-xl p-8 shadow-lg">
                        <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Carnet d'entretien numérique</h3>
                        <p class="text-gray-600 mb-4">Suivez facilement l'entretien de votre véhicule avec des rappels automatiques et un historique détaillé.</p>
                        <div class="text-center mt-8">
                            <span class="text-green-600 text-sm font-medium">Survolez pour en savoir plus</span>
                        </div>
                    </div>
                    <div class="flip-card-back bg-gradient-to-br from-green-500 to-green-600 rounded-xl p-8 shadow-lg text-white">
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Fonctionnalités détaillées</h3>
                        <ul class="text-sm space-y-2">
                            <li>• Rappels automatiques</li>
                            <li>• Planification des RDV</li>
                            <li>• Suivi des coûts</li>
                            <li>• Historique complet</li>
                            <li>• Statistiques d'usage</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Services connectés -->
            <div class="flip-card h-80">
                <div class="flip-card-inner">
                    <div class="flip-card-front bg-white rounded-xl p-8 shadow-lg">
                        <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Services connectés</h3>
                        <p class="text-gray-600 mb-4">Accédez directement aux garages, ateliers et prestataires certifiés avec des offres exclusives.</p>
                        <div class="text-center mt-8">
                            <span class="text-purple-600 text-sm font-medium">Survolez pour en savoir plus</span>
                        </div>
                    </div>
                    <div class="flip-card-back bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-8 shadow-lg text-white">
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Fonctionnalités détaillées</h3>
                        <ul class="text-sm space-y-2">
                            <li>• Réseau de partenaires</li>
                            <li>• Offres exclusives</li>
                            <li>• Réservation en ligne</li>
                            <li>• Géolocalisation</li>
                            <li>• Avis et notes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Ce que disent nos utilisateurs
            </h2>
            <p class="text-xl text-gray-600">
                Plus de 50 000 automobilistes nous font confiance
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"Je reçois mes rappels d'assurance automatiquement. Plus jamais d'oubli !"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold">
                        M
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-gray-900">Marie L.</p>
                        <p class="text-sm text-gray-500">Utilisatrice depuis 2 ans</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"J'ai pu trouver un garage certifié en 2 minutes grâce à l'app. Service impeccable !"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-semibold">
                        P
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-gray-900">Pierre M.</p>
                        <p class="text-sm text-gray-500">Utilisateur depuis 1 an</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"L'interface est intuitive et les rappels m'évitent bien des tracas. Je recommande !"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-semibold">
                        S
                    </div>
                    <div class="ml-3">
                        <p class="font-semibold text-gray-900">Sophie D.</p>
                        <p class="text-sm text-gray-500">Utilisatrice depuis 6 mois</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Téléchargement -->
<section class="relative py-24 bg-gradient-to-br from-slate-50 via-white to-blue-50 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-br from-blue-400/10 to-cyan-400/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-400/10 to-purple-400/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Téléphones avec interface -->
            <div class="relative">
                <!-- Téléphone 1 - Interface principale -->
                <div class="relative z-10 transform rotate-[-8deg] hover:rotate-0 transition-transform duration-500">
                    <div class="w-64 h-[500px] bg-gray-900 rounded-[3rem] p-2 shadow-2xl">
                        <div class="w-full h-full bg-white rounded-[2.5rem] overflow-hidden">
                            <!-- Status bar -->
                            <div class="flex justify-between items-center px-6 py-3 bg-blue-600 text-white text-sm">
                                <span>17:03</span>
                                <div class="flex items-center space-x-1">
                                    <div class="w-4 h-2 bg-white/30 rounded-sm"></div>
                                    <div class="w-4 h-2 bg-white/30 rounded-sm"></div>
                                    <div class="w-4 h-2 bg-white/30 rounded-sm"></div>
                                </div>
                            </div>

                            <!-- Interface TOOAUTO -->
                            <div class="p-6">
                                <div class="text-center mb-6">
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Ma Peugeot 308</h3>
                                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✓ À jour</span>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-blue-50 rounded-xl p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-sm font-medium text-gray-700">Assurance</span>
                                            <span class="text-xs text-orange-600">45 jours</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-orange-500 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 rounded-xl p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-sm font-medium text-gray-700">Visite technique</span>
                                            <span class="text-xs text-green-600">2 mois</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 40%"></div>
                                        </div>
                                    </div>

                                    <div class="bg-purple-50 rounded-xl p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-sm font-medium text-gray-700">Vidange</span>
                                            <span class="text-xs text-purple-600">3 mois</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-500 h-2 rounded-full" style="width: 20%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <button class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold text-sm">
                                        Voir le détail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Téléphone 2 - Interface garage -->
                <div class="absolute top-8 right-0 transform rotate-[8deg] hover:rotate-0 transition-transform duration-500 z-0">
                    <div class="w-64 h-[500px] bg-gray-900 rounded-[3rem] p-2 shadow-2xl">
                        <div class="w-full h-full bg-white rounded-[2.5rem] overflow-hidden">
                            <!-- Status bar -->
                            <div class="flex justify-between items-center px-6 py-3 bg-green-600 text-white text-sm">
                                <span>17:03</span>
                                <div class="flex items-center space-x-1">
                                    <div class="w-4 h-2 bg-white/30 rounded-sm"></div>
                                    <div class="w-4 h-2 bg-white/30 rounded-sm"></div>
                                    <div class="w-4 h-2 bg-white/30 rounded-sm"></div>
                                </div>
                            </div>

                            <!-- Interface Garages -->
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-gray-900 mb-4">Garages près de chez vous</h3>

                                <div class="space-y-3">
                                    <div class="border border-gray-200 rounded-xl p-3">
                                        <div class="flex items-center justify-between mb-2">
                                            <h4 class="font-semibold text-gray-900 text-sm">Auto Service Plus</h4>
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Ouvert</span>
                                        </div>
                                        <p class="text-xs text-gray-600 mb-2">0.8 km • ⭐ 4.8/5</p>
                                        <button class="w-full bg-green-600 text-white py-2 rounded-lg text-xs font-medium">
                                            Prendre RDV
                                        </button>
                                    </div>

                                    <div class="border border-gray-200 rounded-xl p-3">
                                        <div class="flex items-center justify-between mb-2">
                                            <h4 class="font-semibold text-gray-900 text-sm">Garage Central</h4>
                                            <span class="text-xs bg-orange-100 text-orange-800 px-2 py-1 rounded-full">Fermé</span>
                                        </div>
                                        <p class="text-xs text-gray-600 mb-2">1.2 km • ⭐ 4.6/5</p>
                                        <button class="w-full bg-gray-300 text-gray-600 py-2 rounded-lg text-xs font-medium">
                                            Fermé
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="w-full border-2 border-blue-600 text-blue-600 py-3 rounded-xl font-semibold text-sm">
                                        Voir tous les garages
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenu de téléchargement -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                    Disponible sur toutes les plateformes
                </div>

                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Rejoignez-nous <span class="bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">maintenant_</span>
                </h2>

                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Alors, qu'attendez-vous ? Téléchargez l'application mobile et inscrivez-vous pour bénéficier de la gestion automobile tout-en-1 dès aujourd'hui.
                </p>

                <!-- Boutons de téléchargement -->
                <div class="space-y-4 mb-8">
                    <a href="#" class="inline-flex items-center justify-center w-full max-w-sm bg-black text-white py-4 px-6 rounded-2xl font-semibold hover:bg-gray-800 transition-all duration-300 shadow-lg hover:shadow-black/25 hover:-translate-y-1">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
                        Disponible sur App Store
                    </a>

                    <a href="#" class="inline-flex items-center justify-center w-full max-w-sm bg-black text-white py-4 px-6 rounded-2xl font-semibold hover:bg-gray-800 transition-all duration-300 shadow-lg hover:shadow-black/25 hover:-translate-y-1">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z"/>
                        </svg>
                        Disponible sur Google Play
                    </a>
                </div>

                <!-- QR Codes -->
                <div class="grid grid-cols-2 gap-4 max-w-sm mx-auto lg:mx-0">
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gray-200 rounded-xl flex items-center justify-center mx-auto mb-2">
                            <span class="text-gray-500 text-xs">QR iOS</span>
                        </div>
                        <p class="text-xs text-gray-600">Scannez avec iPhone</p>
                    </div>
                    <div class="text-center">
                        <div class="w-24 h-24 bg-gray-200 rounded-xl flex items-center justify-center mx-auto mb-2">
                            <span class="text-gray-500 text-xs">QR Android</span>
                        </div>
                        <p class="text-xs text-gray-600">Scannez avec Android</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-24 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tr from-indigo-500/20 to-purple-500/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                Prêt à <span class="text-tooauto-orange">révolutionner</span> votre expérience automobile ?
            </h2>
            <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Rejoignez plus de 50 000 automobilistes qui ont déjà transformé leur façon de gérer leur véhicule avec TOOAUTO PRO.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="{{ route('download') }}" class="group relative bg-tooauto-orange text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-tooauto-black transition-all duration-300 shadow-2xl hover:shadow-tooauto-orange/25 hover:-translate-y-1">
                    <span class="relative z-10 flex items-center">
                        Télécharger maintenant
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>
                    <div class="absolute inset-0 bg-tooauto-orange rounded-2xl blur opacity-0 group-hover:opacity-75 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('features') }}" class="group border-2 border-white/20 text-white px-10 py-5 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300 backdrop-blur-sm">
                    En savoir plus
                    <svg class="inline-block ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </a>
            </div>

            <!-- Trust indicators -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold text-tooauto-orange mb-2">4.8/5</div>
                    <p class="text-gray-400">Note moyenne</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-tooauto-orange mb-2">50k+</div>
                    <p class="text-gray-400">Utilisateurs actifs</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-tooauto-orange mb-2">99%</div>
                    <p class="text-gray-400">Satisfaction client</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
