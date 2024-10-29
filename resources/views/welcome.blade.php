<!-- resources/views/welcome.blade.php -->
@extends('layouts.base')
@section('title', 'Rogtech | HOME')

@section('content')
@component('components.banner')
@endcomponent
<div class="bg-white">
 
<div id="home" class="relative isolate px-4 pt-14 lg:px-8">
    <!-- Background Top -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#304E9C] to-[#72CAEB] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      
      <div  class="text-center">
      <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Bienvenue sur Rogtech</h1>
        <p class="mt-6 text-lg leading-8 text-gray-600">Votre partenaire pour des solutions web modernes et performantes. Nous sommes spécialisés dans la création de sites web sur mesure, alliant design, performance, et simplicité.</p>
        <div class="mt-6 flex items-center justify-center gap-x-6"> <!-- Changez ici mt-10 à mt-6 -->
            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-black hover:shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">Commencer</a>
            @component('components.music')
            @endcomponent
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
<div id="service" class="bg-gray-100 py-24 ">
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
  <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#304E9C] to-[#72CAEB] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
  @component('components.scrolling')
  @endcomponent 
 
</div>  
@component('components.sectionVideo')
@endcomponent

@component('components.about')
@endcomponent 

@component('components.pricing')
@endcomponent

@component('components.contact')
@endcomponent

@component('components.news')
@endcomponent

@endsection