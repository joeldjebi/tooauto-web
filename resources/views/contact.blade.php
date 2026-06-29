@extends('layouts.app')

@section('title', 'Contact - TOOAUTO')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-green-50 to-blue-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Nous <span class="text-green-600">contacter</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Une question ? Un problème ? Notre équipe support est là pour vous aider 24h/24
            </p>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Formulaire -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                            <input type="text" id="nom" name="nom" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="sujet" class="block text-sm font-medium text-gray-700 mb-2">Sujet</label>
                        <select id="sujet" name="sujet" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Sélectionnez un sujet</option>
                            <option value="support">Support technique</option>
                            <option value="partenariat">Devenir partenaire</option>
                            <option value="bug">Signaler un bug</option>
                            <option value="suggestion">Suggestion d'amélioration</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Décrivez votre demande en détail..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Informations de contact -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Autres moyens de contact</h2>

                <div class="space-y-8">
                    <!-- Support -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Support technique</h3>
                            <p class="text-gray-600 mb-2">Assistance 24h/24 pour tous vos problèmes techniques</p>
                            <p class="text-blue-600 font-medium">support@tooauto-pro.com</p>
                        </div>
                    </div>

                    <!-- Téléphone -->
                    <div class="flex items-start">
                        <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Téléphone</h3>
                            <p class="text-gray-600 mb-2">Lundi - Vendredi : 9h - 18h</p>
                            <p class="text-green-600 font-medium">01 23 45 67 89</p>
                        </div>
                    </div>

                    <!-- Chat -->
                    <div class="flex items-start">
                        <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Chat en direct</h3>
                            <p class="text-gray-600 mb-2">Réponse immédiate via notre chat intégré</p>
                            <button class="text-purple-600 font-medium hover:text-purple-700">Lancer le chat</button>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <div class="flex items-start">
                        <div class="bg-orange-100 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">FAQ</h3>
                            <p class="text-gray-600 mb-2">Consultez nos réponses aux questions fréquentes</p>
                            <a href="{{ route('faq') }}" class="text-orange-600 font-medium hover:text-orange-700">Voir la FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-green-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Besoin d'aide immédiate ?
        </h2>
        <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
            Notre équipe support est disponible 24h/24 pour vous accompagner
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="bg-white text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                Lancer le chat
            </a>
            <a href="{{ route('faq') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors duration-200">
                Consulter la FAQ
            </a>
        </div>
    </div>
</section>
@endsection
