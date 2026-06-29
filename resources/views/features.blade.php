@extends('layouts.app')

@section('title', 'Fonctionnalités - TOOAUTO')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Fonctionnalités <span class="text-blue-600">complètes</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Découvrez tous les modules qui font de TOOAUTO votre compagnon automobile indispensable
            </p>
        </div>
    </div>
</section>

<!-- Modules principaux -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Modules principaux
            </h2>
            <p class="text-xl text-gray-600">
                Une gestion complète de votre véhicule en quelques clics
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Gestion du véhicule -->
            <div class="order-2 lg:order-1">
                <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Gestion du véhicule</h3>
                <p class="text-lg text-gray-600 mb-6">
                    Centralisez toutes les informations de votre véhicule dans un espace sécurisé et organisé.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Fiche technique complète et détaillée
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Historique complet des réparations
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Stockage sécurisé des documents
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Suivi des kilomètres et consommation
                    </li>
                </ul>
            </div>
            <div class="order-1 lg:order-2">
                <div class="bg-white rounded-2xl shadow-2xl p-6 transform hover:scale-105 transition-transform duration-300">
                    <div class="bg-gray-100 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <h4 class="font-semibold text-gray-900 mb-3">Peugeot 308 SW</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Année:</span>
                                    <span class="font-medium">2019</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kilométrage:</span>
                                    <span class="font-medium">85 420 km</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Carburant:</span>
                                    <span class="font-medium">Diesel</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Consommation:</span>
                                    <span class="font-medium">5.2L/100km</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Carnet d'entretien -->
            <div>
                <div class="bg-white rounded-2xl shadow-2xl p-6 transform hover:scale-105 transition-transform duration-300">
                    <div class="bg-gray-100 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <h4 class="font-semibold text-gray-900 mb-3">Carnet d'entretien</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-2 bg-green-50 rounded">
                                    <span class="text-sm text-gray-700">Vidange</span>
                                    <span class="text-xs text-green-600 font-medium">✓ Récente</span>
                                </div>
                                <div class="flex items-center justify-between p-2 bg-yellow-50 rounded">
                                    <span class="text-sm text-gray-700">Filtre à air</span>
                                    <span class="text-xs text-yellow-600 font-medium">Dans 2 mois</span>
                                </div>
                                <div class="flex items-center justify-between p-2 bg-red-50 rounded">
                                    <span class="text-sm text-gray-700">Pneus</span>
                                    <span class="text-xs text-red-600 font-medium">Urgent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Carnet d'entretien numérique</h3>
                <p class="text-lg text-gray-600 mb-6">
                    Suivez facilement l'entretien de votre véhicule avec des rappels automatiques et un historique détaillé.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Rappels automatiques personnalisés
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Planification des rendez-vous
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Suivi des coûts et factures
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Historique complet des interventions
                    </li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Services connectés -->
            <div class="order-2 lg:order-1">
                <div class="bg-purple-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Services connectés</h3>
                <p class="text-lg text-gray-600 mb-6">
                    Accédez directement aux garages, ateliers et prestataires certifiés avec des offres exclusives.
                </p>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Réseau de partenaires certifiés
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Offres exclusives et réductions
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Réservation en ligne simplifiée
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Évaluation et avis des services
                    </li>
                </ul>
            </div>
            <div class="order-1 lg:order-2">
                <div class="bg-white rounded-2xl shadow-2xl p-6 transform hover:scale-105 transition-transform duration-300">
                    <div class="bg-gray-100 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                        <div class="bg-white rounded-lg p-4">
                            <h4 class="font-semibold text-gray-900 mb-3">Partenaires à proximité</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-2 border rounded">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">Garage Auto Plus</p>
                                        <p class="text-xs text-gray-500">0.8 km • ⭐ 4.8</p>
                                    </div>
                                    <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">-15%</span>
                                </div>
                                <div class="flex items-center justify-between p-2 border rounded">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">Midas Centre</p>
                                        <p class="text-xs text-gray-500">1.2 km • ⭐ 4.6</p>
                                    </div>
                                    <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">Disponible</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fonctionnalités avancées -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Fonctionnalités avancées
            </h2>
            <p class="text-xl text-gray-600">
                Des outils intelligents pour une gestion optimale
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Rappels intelligents -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12.828 7H4.828z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Rappels intelligents</h3>
                <p class="text-gray-600 mb-4">Notifications personnalisées basées sur votre utilisation et les recommandations constructeur.</p>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>• Rappels d'assurance</li>
                    <li>• Visite technique</li>
                    <li>• Entretien périodique</li>
                    <li>• Contrôle des pneus</li>
                </ul>
            </div>

            <!-- Statistiques -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Statistiques détaillées</h3>
                <p class="text-gray-600 mb-4">Analysez vos dépenses et optimisez l'entretien de votre véhicule.</p>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>• Coûts d'entretien</li>
                    <li>• Consommation de carburant</li>
                    <li>• Kilométrage mensuel</li>
                    <li>• Graphiques d'évolution</li>
                </ul>
            </div>

            <!-- Sauvegarde cloud -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Sauvegarde sécurisée</h3>
                <p class="text-gray-600 mb-4">Vos données sont protégées et synchronisées automatiquement sur tous vos appareils.</p>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>• Chiffrement de niveau bancaire</li>
                    <li>• Synchronisation multi-appareils</li>
                    <li>• Sauvegarde automatique</li>
                    <li>• Conformité RGPD</li>
                </ul>
            </div>

            <!-- Assistance 24/7 -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="bg-orange-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Assistance 24/7</h3>
                <p class="text-gray-600 mb-4">Support technique et assistance dépannage disponible à tout moment.</p>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>• Chat en direct</li>
                    <li>• Assistance téléphonique</li>
                    <li>• Base de connaissances</li>
                    <li>• Dépannage d'urgence</li>
                </ul>
            </div>

            <!-- Mode hors ligne -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Mode hors ligne</h3>
                <p class="text-gray-600 mb-4">Accédez à vos informations essentielles même sans connexion internet.</p>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>• Données essentielles</li>
                    <li>• Documents importants</li>
                    <li>• Contacts d'urgence</li>
                    <li>• Synchronisation différée</li>
                </ul>
            </div>

            <!-- Intégrations -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="bg-indigo-100 w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Intégrations</h3>
                <p class="text-gray-600 mb-4">Connectez TOOAUTO avec vos applications préférées.</p>
                <ul class="text-sm text-gray-500 space-y-2">
                    <li>• Calendrier Google/Apple</li>
                    <li>• Applications bancaires</li>
                    <li>• Assureurs partenaires</li>
                    <li>• Systèmes de navigation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Démonstration -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Voir TOOAUTO en action
            </h2>
            <p class="text-xl text-gray-600">
                Découvrez comment l'application simplifie votre quotidien
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Interface intuitive et moderne</h3>
                <p class="text-lg text-gray-600 mb-6">
                    Une expérience utilisateur soigneusement conçue pour vous faire gagner du temps.
                    Navigation fluide, informations claires et accès rapide à toutes les fonctionnalités.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">Design épuré et professionnel</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">Navigation intuitive en 3 clics maximum</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">Personnalisation selon vos besoins</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-8 text-white">
                    <div class="text-center">
                        <h4 class="text-xl font-bold mb-4">Démonstration vidéo</h4>
                        <div class="bg-white bg-opacity-20 rounded-lg p-8 mb-4">
                            <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-sm">Découvrez TOOAUTO en 2 minutes</p>
                        </div>
                        <button class="bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Lancer la démo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Prêt à découvrir toutes ces fonctionnalités ?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Téléchargez TOOAUTO et transformez votre expérience automobile dès aujourd'hui
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('download') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                Télécharger l'application
            </a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
