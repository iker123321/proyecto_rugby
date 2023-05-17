<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';?>

<div id="controls-carousel" class="relative w-full z-0" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/grupo.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="img/peques.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/037.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/183.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="img/080.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<section>
  <div
    class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
  >
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
      <div
        class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full"
      >
        <img
          alt="Party"
          src="img/carrera.jpg"
          class="absolute inset-0 h-full w-full object-cover"
        />
      </div>

      <div class="lg:py-24">
        <h2 class="text-3xl font-bold sm:text-4xl">Bienvenido al club</h2>

        <p class="mt-4 text-gray-600">
          Te damos la bienvenida a un club que ha trabajado muy duro para poder reunir jugadores y formar equipos en los que fomentamos los valores de este gran deporte
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bg-blue-900 text-white">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
    <div class="max-w-xl">
      <h2 class="text-3xl font-bold sm:text-4xl">Que nos hace especial</h2>

      <p class="mt-4 text-gray-300">
      El club se basa en el trabajo en equipo y la colaboración entre los jugadores, por lo que fomentamos estos valores y ofrecemos un ambiente en el que los miembros se sientan apoyados y motivados para dar lo mejor de sí mismos en el campo.
      </p>
    </div>

    <div
      class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3"
    >
      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 px-5 py-4">
        <i class="fa-solid fa-1" style="color: #ffffff;"></i>
        </span>

        <div>
          <h2 class="text-lg font-bold">Único club en la isla</h2>

          <p class="mt-1 text-sm text-gray-300">
           Representamos a la isla de menorca ya que solo esta nuestro equipo.
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 px-5 py-4">
        <i class="fa-solid fa-child-reaching" style="color: #ffffff;"></i>
        </span>

        <div>
          <h2 class="text-lg font-bold">Gran comunidad.</h2>

          <p class="mt-1 text-sm text-gray-300">
            Nos apoyamos entre nosotros. No importa ni el tamaño, altura o edad ya que todo es perfecto para este deporte.
          </p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <span class="shrink-0 rounded-lg bg-gray-800 py-4 px-4">
        <i class="fa-solid fa-plane-departure" style="color: #ffffff;"></i>
        </span>

        <div>
          <h2 class="text-lg font-bold">Viaje entre islas.</h2>

          <p class="mt-1 text-sm text-gray-300">
            Disputamos los partidos que son fuera de casa en Mallorca e Ibiza.
          </p>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div
    class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
  >
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">

      <div  class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
        <h2 class="text-3xl font-bold sm:text-4xl">Localización y horarios</h2>

        <p class="mt-4 text-gray-600">
          <p class="font-bold text-lg">Martes y jueves</p><br>
          <p>18:00 a 19:30  |  Categorias inferiores</p><br>
          <p>20:00 a 21:30  |  Sénior</p>
        </p>
      </div>
      <div
      class="relative lg:"
      >
      <iframe class = "rounded-lg" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d820.3988416474049!2d4.250922574033513!3d39.88752123505572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spolideportivo%20de%20Mah%C3%B3n!5e1!3m2!1ses!2ses!4v1682287605554!5m2!1ses!2ses" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


<a
  href="nosotros.php"
  class="group flex flex-col justify-between rounded-sm bg-white p-4 shadow-xl transition-shadow hover:shadow-lg sm:p-6 lg:p-8"
>
  <div>
    <h3 class="text-right text-3xl font-bold text-indigo-600 sm:text-5xl">70+</h3>

    <div class="mt-4 border-t-2 border-gray-100 pt-4">
      <p class="text-right text-sm font-medium uppercase text-gray-500">Miembros</p>
    </div>
  </div>

  <div
    class="mt-8 inline-flex items-center gap-2 text-indigo-600 sm:mt-12 lg:mt-16"
  >
    <p class="text-right font-medium sm:text-lg">Como lo hemos hecho</p>

    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6 transition-all group-hover:ms-3 rtl:rotate-180"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M17 8l4 4m0 0l-4 4m4-4H3"
      />
    </svg>
  </div>
</a>


<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';?>
