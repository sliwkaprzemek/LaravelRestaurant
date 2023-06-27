<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans dark:text-gray-900 antialiased">

        <div class="bg-white shadow-md" x-data="{ isOpen: false }">
            <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
              <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-purple-500 md:text-2xl hover:text-green-400"
                  href="/">
                  BURGIR
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                  <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                      <path fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                      </path>
                    </svg>
                  </button>
                </div>
              </div>
      
              <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
              <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-purple-500 hover:text-green-400"
                  href="{{ route('categories.index') }}">Kategorie</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-purple-500 hover:text-green-400"
                  href="{{ route('menus.index') }}">Dania</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-purple-500 hover:text-green-400"
                  href="{{ route('reservations.step.one') }}">Zarezerwuj Stolik</a>
              </div>
            </nav>
          </div>

            <div class="font-sans text-gray-900 min-h-screen">
                {{ $slot }}
            </div>

            <footer class="dark:bg-gray-800 border-t dark:border-gray-200">
                <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
                    <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-purple-500 md:text-2xl hover:text-green-400" href="/">
                    BURGIR
                    </a>
                  <div class="flex flex-wrap justify-center">
                    <ul class="flex items-center space-x-4 text-white">
                      <li>PAI Projekt © Przemysław Śliwka</li>
                    </ul>
                  </div>
                  <div class="flex justify-center mt-4 lg:mt-0">
                    <a href="{{route('admin.index')}}">
                      <svg width="32" height="32" version="1.1" viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg">
                        <path d="m247.06 252.95 141.17 141.17-141.17 141.2-247.06-247.06 247.06-247.06 61.766 61.766-35.289 35.289-26.477-26.477-176.46 176.46 176.46 176.46 70.945-70.945-106.26-105.52zm211.77-211.77 247.06 247.06-247.06 247.06-61.766-61.766 35.289-35.289 26.477 26.477 176.46-176.46-176.46-176.46-70.945 70.945 106.26 105.52-35.289 35.289-141.17-141.17z"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </footer>

    </body>
</html>
