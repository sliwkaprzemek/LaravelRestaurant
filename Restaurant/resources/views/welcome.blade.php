<x-guest-layout>
    <!-- Main Hero Content -->
    <div
      class="container max-w-lg px-4 py-80 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('https://cdn.pixabay.com/photo/2019/04/04/15/30/hamburger-4103070_960_720.jpg')">
      <h1
        class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-purple-800 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Witaj w Burgir</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        U nas zawsze znajdziesz coś dla siebie.
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="{{route('reservations.step.one')}}" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Zarezerwuj stolik
          </a>
      </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 dark:bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h2 class="text-4xl text-green-600">Witamy</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Jesteśmy grupą studentów, która robi najlepszą szamę w mieście. Rozwijamy się i dbamy o naszą jakość. Powstaliśmy w 2023 roku. To wszystko dla Ciebie.
              </p>
              <div class="relative flex">
                <a href="{{route('categories.index')}}"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  Sprawdź nasze potrawy!
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="http://blog.chefworks.com/uniforms/wp-content/uploads/2015/12/image001.jpg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">Coś o nas</h2>
              <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-700">
                Dlaczego my?</h2>

              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Nasza kuchnia stawia na najszlachetniejszy gatunek mięsa – wołowinę. Nasze burgery i steki przygotowujemy na grillu Josper opalanym węglem drzewnym. To właśnie sprawia, że ich smak jest tak niezapomniany. Idealnym ich uzupełnieniem są nasze różnorodne lemoniady, radlery i koktajle.</p>
              <ul>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">Zjesz w mgnieniu oka.</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="font-medium text-gray-500">Najniższe ceny na rynku.</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">Najlepsza jakość w skali kraju.</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
              class="mx-auto sm:max-w-sm lg:max-w-full"
              src="https://media02.stockfood.com/largepreviews/MzQ2MDMyODE5/11162349-Pizza-chef.jpg" alt="feature image"></div>
        </div>
      </div>
    </section>
    <section class="px-2 py-32 dark:bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h2 class="text-4xl text-green-600">Mapa</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Nasz lokal znajduje się w świetnym miejscu. Niedaleko galerii handlowej Plaza, przy ulicy Ćwiartki 3/4.
              </p>
              <div class="relative flex">
                <a href="https://www.google.com/maps/dir//Red+Rock+City,+Marii+Curie-Skłodowskiej+3,+20-400+Lublin/@51.2461386,22.5472618,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x472257642ffa6ab9:0x6c763eb4c4f62db6!2m2!1d22.5494505!2d51.2461353!3e0?hl=pl-PL"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  Dotrzyj do nas
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2497.530634223534!2d22.5472618!3d51.2461386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472257642ffa6ab9%3A0x6c763eb4c4f62db6!2sRed%20Rock%20City!5e0!3m2!1spl!2spl!4v1675250698077!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
          </div>
        </div>
      </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-800">
      <div class="my-16 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-blue-700">
          Zaufali nam </h2>
        <p class="text-xl text-white">Najwięksi szefowie kuchni i degustatorzy wyrazili swoje opinie o naszym jedzeniu</p>
      </div>
      <div class="grid gap-2 lg:grid-cols-3">
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg mx-auto">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://cdn.boop.pl/uploads/2022/06/yhnjbt5r-743x418.jpg">
          </div>
          <div>

            <h2 class="text-3xl font-semibold text-gray-800"><a href="https://www.youtube.com/watch?v=toZW65rksYY" target="_blank">Burgir</a></h2>
            <p class="mt-2 text-gray-600">ROOOOOOOOOOOOOBI WRAŻENIEEEEEEEEEEEEE!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="https://www.youtube.com/shorts/0pyve7o-Upw" target="_blank" class="text-xl font-medium text-green-500">MrKryha</a>
          </div>
        </div>
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg mx-auto">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://d-art.ppstatic.pl/kadry/k/r/1/af/4c/62603758285dd_o_medium.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Pizza</h2>
            <p class="mt-2 text-gray-600">Najlepsze kotlety, jakie jadłam. Poza moimi oczywiście!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="https://cytaty.pl/sentencje/72336,25-najlepszych-cytatow-magdy-gessler.html" target="_blank" class="text-xl font-medium text-green-500">Magda Gessler</a>
          </div>
        </div>
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg mx-auto">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://s3.viva.pl/newsy/wojciech-modest-amaro-487376-GALLERY_BIG.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Żeberka</h2>
            <p class="mt-2 text-gray-600">Jak zjadłem i wychodziłen, to uderzyłem się w podest.</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="https://oaza-memow.pl/m/meme_cxsJ46RJIiIqYclNStA2dpTic" target="_blank" class="text-xl font-medium text-green-500">W. Amaro Modest</a>
          </div>
        </div>
      </div>
    </section>

</x-guest-layout>