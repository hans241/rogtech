<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rogtech | HOME</title>
    <link rel="shortcut icon" href="img/Favicone1.png" type="image/x-icon"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      function closeBanner() {
    document.getElementById('banner').style.display = 'none';
    }
    </script>
</head>
<!-- Add this style block -->
<style>
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-100%);
    }
  }
  
  .animate-scroll {
    display: inline-flex;
    animation: scroll 30s linear infinite;
  }
  /* Style pour la bannière */
  .banner-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #f9f9f9;
    text-align: center;
    padding: 10px 0;
    z-index: 1000; /* S'assurer que la bannière est au-dessus de tout */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  
  /* Style pour l'image de la bannière */
  .banner {
    max-width: 100%;
    height: auto;
  }
  
  /* Bouton de fermeture (croix) */
  .close-btn {
  position: absolute;
  top: 10px;
  right: 15px;
  background-color: red; /* Arrière-plan rouge */
  color: white; /* Couleur de la croix en blanc */
  border: none;
  font-size: 24px;
  cursor: pointer;
  padding: 5px 10px;
  }

  .close-btn:hover {
  background-color: darkred; /* Changer le rouge en plus sombre au survol */
  }


</style>
<body>
 <!-- Bannière publicitaire -->
 <div id="banner" class="banner-container">
    <img src="img/Bazz2.png" alt="Publicité" class="banner">
    <button class="close-btn" onclick="closeBanner()">&times;</button>
  </div>
<div class="bg-white">
<header class="fixed inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-white bg-opacity-40 backdrop-blur-md" aria-label="Global">  <!-- Ajout de backdrop-blur-md -->
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Rogtech</span>
                <img class="h-8 w-auto" src="img/finalLog.svg" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Accueil</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Services</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">A propos</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-black hover:shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">Commencer</a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Accueil</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Services</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">A propos</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
                    </div>
                    <div class="py-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-black hover:shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

  <div class="relative isolate px-4 pt-14 lg:px-8">
    <!-- Background Top -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#304E9C] to-[#72CAEB] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="text-center">
      <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Bienvenue sur Rogtech</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Votre partenaire pour des solutions web modernes et performantes. Nous sommes spécialisés dans la création de sites web sur mesure, alliant design, performance, et simplicité.</p>
        <div class="mt-6 flex items-center justify-center gap-x-6"> <!-- Changez ici mt-10 à mt-6 -->
            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-black hover:shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">Commencer</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">voir plus<span aria-hidden="true">→</span></a>
        </div>
        
      </div>
        <!-- Nouvelle section pour les technologies -->
        <div class="mt-10">
        <h3 class=" text-gray-600 text-center">Construisez avec les dernières technologies</h3>
        <div class="flex justify-center mt-5 gap-x-8">
            <img src="img/bootstrap-5-1.svg" alt="Bootstrap" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/tailwindcss.svg" alt="Tailwind CSS" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/react-2.svg" alt="React" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/vue-9.svg" alt="Vue.js" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/laravel-2.svg" alt="Laravel" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/django.svg" alt="Django" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/wordpress-icon-1.svg" alt="WordPress" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
            <img src="img/shopify.svg" alt="Shopify" class="h-12 w-12 transition-transform duration-300 hover:scale-110" />
        </div>

        <div class="class mt-10 flex justify-center">
            <img src="img/hero image web design.png" alt="héros" class="mx-auto max-w-[120%] h-auto rounded-t-xl rounded-tr-xl"> <!-- Ajustez max-w selon vos besoins -->
        </div>

        </div>
    </div>
    <!-- Background Bottom -->
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#304E9C] to-[#72CAEB] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>
    <!-- Section Service  -->
    <div class="bg-white py-24 ">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 class="text-base font-semibold leading-7 text-indigo-600">Our services</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nos services</p>
      <p class="mt-6 text-lg leading-8 text-gray-600">Que vous cherchiez à créer un site web sur mesure ou à optimiser votre plateforme existante, nous sommes là pour vous accompagner à chaque étape.</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
              </svg>
            </div>
            Développement de sites web personnalisés
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Nous concevons des sites web sur mesure, adaptés à votre vision. Notre équipe collabore étroitement avec vous pour un résultat optimal. Offrez à vos utilisateurs une expérience unique et engageante.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
              </svg>
            </div>
            Création de boutiques en ligne
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Lancez votre e-commerce avec une plateforme performante et sécurisée. Nous intégrons les meilleures solutions de paiement pour faciliter les ventes. Boostez votre visibilité et atteignez de nouveaux clients.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
              </svg>
            </div>
            Optimisation et refonte de sites existants
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Améliorez votre site actuel grâce à notre expertise en optimisation. Nous analysons les performances pour maximiser votre impact en ligne. Transformez l'expérience utilisateur tout en préservant votre identité.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
              </svg>
            </div>
            Conception d'interfaces utilisateur 
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Nous créons des interfaces attrayantes et faciles à naviguer sur tous les appareils. Chaque design est pensé pour garantir une expérience fluide et agréable. Attirez et retenez vos visiteurs avec un look moderne.</dd>
        </div>
      </dl>
    </div>
  </div>
</div>

    <!-- Section Colaborateur -- -->
    <div class="bg-white py-24 overflow-hidden">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">
      Trusted by the world’s most innovative teams
    </h2>
    <!-- Container for scrolling logos -->
    <div class="relative mt-10 flex overflow-hidden">
      <!-- Inner scrolling wrapper -->
      <div class="flex space-x-8 animate-scroll">
        <!-- Logos -->
        <img class="max-h-12 w-auto object-contain" src="carusel/logoinptic.png" alt="Transistor" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/42.png" alt="Reform" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/Airtel-Logo.png" alt="Tuple" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/Aninf.png" alt="SavvyCal" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/MEN.jpg" alt="Statamic" width="158" height="48">

        <!-- Repeat logos to create the illusion of infinite scroll -->
        <img class="max-h-12 w-auto object-contain" src="carusel/logoinptic.png" alt="Transistor" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/42.png" alt="Reform" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/Airtel-Logo.png" alt="Tuple" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/Aninf.png" alt="SavvyCal" width="158" height="48">
        <img class="max-h-12 w-auto object-contain" src="carusel/MEN.jpg" alt="Statamic" width="158" height="48">
      </div>
    </div>
  </div>
</div>






    <!-- Background Bottom -->
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#304E9C] to-[#72CAEB] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>
</body>
</html>
