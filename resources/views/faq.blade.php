@extends('layouts.app')

@section('title', 'FAQ - TOOAUTO')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-orange-50 to-red-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Questions <span class="text-orange-600">fréquentes</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Trouvez rapidement les réponses à vos questions sur TOOAUTO
            </p>
        </div>
    </div>
</section>

<!-- FAQ Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-8">
            <!-- Question 1 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Comment ajouter un véhicule dans l'application ?</h3>
                <p class="text-gray-600">Pour ajouter votre véhicule, rendez-vous dans la section "Mes véhicules" et cliquez sur "Ajouter un véhicule". Vous devrez saisir les informations de base comme la marque, le modèle, l'année et le kilométrage. L'application vous guidera ensuite pour configurer les rappels d'entretien personnalisés.</p>
            </div>

            <!-- Question 2 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Comment recevoir des rappels pour la visite technique ?</h3>
                <p class="text-gray-600">Les rappels de visite technique sont automatiquement configurés selon les recommandations constructeur. Vous recevrez des notifications 2 mois, 1 mois et 1 semaine avant l'échéance. Vous pouvez personnaliser ces rappels dans les paramètres de l'application.</p>
            </div>

            <!-- Question 3 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">L'application est-elle gratuite ?</h3>
                <p class="text-gray-600">TOOAUTO propose une version gratuite avec les fonctionnalités essentielles : gestion du véhicule, rappels d'entretien et accès au réseau de partenaires. Une version premium est disponible avec des fonctionnalités avancées comme les statistiques détaillées et l'assistance prioritaire.</p>
            </div>

            <!-- Question 4 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Mes données sont-elles sécurisées ?</h3>
                <p class="text-gray-600">Absolument. Nous utilisons un chiffrement de niveau bancaire pour protéger vos données. Toutes les informations sont stockées de manière sécurisée et nous respectons le RGPD. Vos données ne sont jamais partagées avec des tiers sans votre consentement explicite.</p>
            </div>

            <!-- Question 5 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Comment fonctionnent les offres partenaires ?</h3>
                <p class="text-gray-600">Nos partenaires proposent des réductions exclusives aux utilisateurs TOOAUTO. Ces offres apparaissent automatiquement dans l'application selon votre localisation et vos besoins. Vous pouvez réserver directement via l'application et bénéficier des tarifs préférentiels.</p>
            </div>

            <!-- Question 6 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Puis-je utiliser l'application hors ligne ?</h3>
                <p class="text-gray-600">Oui, certaines fonctionnalités sont disponibles hors ligne : consultation de vos informations véhicule, historique d'entretien et contacts d'urgence. La synchronisation se fait automatiquement dès que vous retrouvez une connexion internet.</p>
            </div>

            <!-- Question 7 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Comment supprimer mon compte ?</h3>
                <p class="text-gray-600">Pour supprimer votre compte, rendez-vous dans les paramètres de l'application, section "Compte", puis "Supprimer mon compte". Toutes vos données seront définitivement supprimées dans les 30 jours. Vous pouvez également nous contacter directement pour cette demande.</p>
            </div>

            <!-- Question 8 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">L'application est-elle disponible sur tous les appareils ?</h3>
                <p class="text-gray-600">TOOAUTO est disponible sur iOS (iPhone/iPad) et Android. L'application s'adapte automatiquement à la taille de votre écran. Vos données sont synchronisées entre tous vos appareils connectés au même compte.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Support -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Vous ne trouvez pas votre réponse ?
        </h2>
        <p class="text-xl text-gray-600 mb-8">
            Notre équipe support est là pour vous aider
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                Nous contacter
            </a>
            <a href="#" class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition-colors duration-200">
                Chat en direct
            </a>
        </div>
    </div>
</section>
@endsection
