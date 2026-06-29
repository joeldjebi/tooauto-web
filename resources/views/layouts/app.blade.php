<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TOOAUTO - Le compagnon numérique de l'automobiliste moderne. Gérez facilement l'entretien, l'assurance et tous les services de votre véhicule depuis votre smartphone.">
    <meta name="keywords" content="automobile, entretien voiture, assurance auto, visite technique, garage, application mobile">

    <title>@yield('title', 'TOOAUTO - Votre compagnon automobile numérique')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Styles / Scripts (build : npm run build → public/css/app.css, public/js/app.js) -->
    @if(file_exists(public_path('css/app.css')))
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif
    @if(file_exists(public_path('js/app.js')))
    <script type="module" src="{{ asset('js/app.js') }}"></script>
    @endif
</head>
<body class="bg-white text-gray-900 font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/tooauto_logo.png') }}" alt="TOOAUTO" class="h-20 w-auto">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('home') ? 'text-tooauto-orange font-medium' : '' }}">Accueil</a>
                    <a href="#modules" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200">Modules</a>
                    <a href="{{ route('features') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('features') ? 'text-tooauto-orange font-medium' : '' }}">Fonctionnalités</a>
                    <a href="#acteurs" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200">Acteurs</a>
                    <a href="{{ route('partners') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('partners') ? 'text-tooauto-orange font-medium' : '' }}">Partenaires</a>
                    <a href="{{ route('testimonials') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('testimonials') ? 'text-tooauto-orange font-medium' : '' }}">Témoignages</a>
                    <a href="{{ route('download') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('download') ? 'text-tooauto-orange font-medium' : '' }}">Télécharger</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-tooauto-orange font-medium' : '' }}">Contact</a>
                    <a href="{{ route('faq') }}" class="text-gray-700 hover:text-tooauto-orange transition-colors duration-200 {{ request()->routeIs('faq') ? 'text-tooauto-orange font-medium' : '' }}">FAQ</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button text-gray-700 hover:text-tooauto-orange focus:outline-none focus:text-tooauto-orange">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('home') ? 'text-tooauto-orange font-medium' : '' }}">Accueil</a>
                <a href="#modules" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange">Modules</a>
                <a href="{{ route('features') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('features') ? 'text-tooauto-orange font-medium' : '' }}">Fonctionnalités</a>
                <a href="#acteurs" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange">Acteurs</a>
                <a href="{{ route('partners') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('partners') ? 'text-tooauto-orange font-medium' : '' }}">Partenaires</a>
                <a href="{{ route('testimonials') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('testimonials') ? 'text-tooauto-orange font-medium' : '' }}">Témoignages</a>
                <a href="{{ route('download') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('download') ? 'text-tooauto-orange font-medium' : '' }}">Télécharger</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('contact') ? 'text-tooauto-orange font-medium' : '' }}">Contact</a>
                <a href="{{ route('faq') }}" class="block px-3 py-2 text-gray-700 hover:text-tooauto-orange {{ request()->routeIs('faq') ? 'text-tooauto-orange font-medium' : '' }}">FAQ</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo et description -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/tooauto_logo.png') }}" alt="TOOAUTO" class="h-8 w-auto">
                    </div>
                    <p class="text-gray-300 mb-4 max-w-md">
                        Le compagnon numérique de l'automobiliste moderne. Une plateforme simple, sécurisée et connectée qui facilite la vie au volant.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Liens rapides -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('features') }}" class="text-gray-300 hover:text-tooauto-orange transition-colors">Fonctionnalités</a></li>
                        <li><a href="{{ route('partners') }}" class="text-gray-300 hover:text-tooauto-orange transition-colors">Partenaires</a></li>
                        <li><a href="{{ route('testimonials') }}" class="text-gray-300 hover:text-tooauto-orange transition-colors">Témoignages</a></li>
                        <li><a href="{{ route('download') }}" class="text-gray-300 hover:text-tooauto-orange transition-colors">Télécharger</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-tooauto-orange transition-colors">Contact</a></li>
                        <li><a href="{{ route('faq') }}" class="text-gray-300 hover:text-tooauto-orange transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-tooauto-orange transition-colors">Aide</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-tooauto-orange transition-colors">Confidentialité</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} TOOAUTO. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript pour le menu mobile et animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menu mobile
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Effets parallax
            function initParallax() {
                const parallaxElements = document.querySelectorAll('.parallax-element');

                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;

                    parallaxElements.forEach(element => {
                        const speed = element.dataset.speed || 0.5;
                        const yPos = -(scrolled * speed);
                        element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                    });
                });
            }

            // Scroll reveal animations
            function initScrollReveal() {
                const revealElements = document.querySelectorAll('.scroll-reveal');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('revealed');
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                });

                revealElements.forEach(element => {
                    observer.observe(element);
                });
            }

            // Animation des éléments flottants
            function initFloatingElements() {
                const floatingElements = document.querySelectorAll('.animate-float, .animate-float-delayed, .animate-float-slow');

                floatingElements.forEach((element, index) => {
                    element.style.animationDelay = `${index * 0.5}s`;
                });
            }

            // Effet de particules pour le hero
            function createParticles() {
                const heroSection = document.querySelector('section');
                if (!heroSection) return;

                for (let i = 0; i < 15; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'absolute w-1 h-1 bg-white rounded-full opacity-20';
                    particle.style.left = Math.random() * 100 + '%';
                    particle.style.top = Math.random() * 100 + '%';
                    particle.style.animation = `float ${3 + Math.random() * 4}s ease-in-out infinite`;
                    particle.style.animationDelay = Math.random() * 2 + 's';
                    heroSection.appendChild(particle);
                }
            }

            // Initialisation
            initParallax();
            initScrollReveal();
            initFloatingElements();
            createParticles();
            initMouseTrail();
            initMagneticElements();
        });

        // Fonction pour les clés de boulon qui suivent la souris
        function initMouseTrail() {
            let mouseX = 0, mouseY = 0;
            let trail = [];
            const maxTrailLength = 15;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;

                // Créer une nouvelle clé de boulon
                const wrench = document.createElement('div');
                wrench.className = 'mouse-wrench';
                wrench.style.left = mouseX + 'px';
                wrench.style.top = mouseY + 'px';

                // SVG de clé de boulon
                wrench.innerHTML = `
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"
                              fill="#de5f0c"
                              stroke="#b8540a"
                              stroke-width="1"/>
                    </svg>
                `;

                document.body.appendChild(wrench);

                // Ajouter à la trail
                trail.push(wrench);
                if (trail.length > maxTrailLength) {
                    const oldWrench = trail.shift();
                    if (oldWrench && oldWrench.parentNode) {
                        oldWrench.parentNode.removeChild(oldWrench);
                    }
                }

                // Supprimer la clé après l'animation
                setTimeout(() => {
                    if (wrench && wrench.parentNode) {
                        wrench.parentNode.removeChild(wrench);
                    }
                }, 2000);
            });
        }

        // Fonction pour l'effet magnétique
        function initMagneticElements() {
            const magneticElements = document.querySelectorAll('.magnetic');

            magneticElements.forEach(element => {
                element.addEventListener('mousemove', (e) => {
                    const rect = element.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    const distance = Math.sqrt(x * x + y * y);
                    const maxDistance = 100;

                    if (distance < maxDistance) {
                        const force = (maxDistance - distance) / maxDistance;
                        const moveX = x * force * 0.1;
                        const moveY = y * force * 0.1;

                        element.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
                    }
                });

                element.addEventListener('mouseleave', () => {
                    element.style.transform = 'translate(0px, 0px) scale(1)';
                });
            });
        }

        // Fonction pour jouer la vidéo
        function playVideo() {
            const cover = document.querySelector('.relative.bg-gradient-to-br');
            const videoContainer = document.getElementById('videoContainer');
            const videoFrame = document.getElementById('videoFrame');

            // Positionner la vidéo au-dessus du cover
            videoContainer.style.position = 'absolute';
            videoContainer.style.top = '0';
            videoContainer.style.left = '0';
            videoContainer.style.right = '0';
            videoContainer.style.zIndex = '10';

            // Afficher le container vidéo
            videoContainer.classList.remove('hidden');

            // Charger et jouer la vidéo YouTube
            videoFrame.src = 'https://www.youtube.com/embed/fPjOWekzeGI?si=example&autoplay=1&mute=0&controls=1&showinfo=0&rel=0&modestbranding=1';

            // Animation d'apparition depuis le centre
            videoContainer.style.opacity = '0';
            videoContainer.style.transform = 'scale(0.8)';
            videoContainer.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';

            setTimeout(() => {
                videoContainer.style.opacity = '1';
                videoContainer.style.transform = 'scale(1)';
            }, 100);

            // Ajouter un bouton de fermeture
            if (!document.getElementById('closeVideoBtn')) {
                const closeBtn = document.createElement('button');
                closeBtn.id = 'closeVideoBtn';
                closeBtn.innerHTML = '✕';
                closeBtn.className = 'absolute top-4 right-4 z-20 bg-black/70 hover:bg-black text-white w-10 h-10 rounded-full flex items-center justify-center text-xl font-bold transition-all duration-300 hover:scale-110';
                closeBtn.onclick = closeVideo;
                videoContainer.appendChild(closeBtn);
            }
        }

        // Fonction pour fermer la vidéo
        function closeVideo() {
            const videoContainer = document.getElementById('videoContainer');
            const videoFrame = document.getElementById('videoFrame');
            const closeBtn = document.getElementById('closeVideoBtn');

            // Animation de fermeture
            videoContainer.style.transition = 'all 0.3s ease-in';
            videoContainer.style.opacity = '0';
            videoContainer.style.transform = 'scale(0.8)';

            setTimeout(() => {
                videoContainer.classList.add('hidden');
                videoFrame.src = ''; // Arrêter la vidéo
                if (closeBtn) {
                    closeBtn.remove();
                }
                // Remettre les styles par défaut
                videoContainer.style.position = '';
                videoContainer.style.top = '';
                videoContainer.style.left = '';
                videoContainer.style.right = '';
                videoContainer.style.zIndex = '';
            }, 300);
        }
    </script>
</body>
</html>
