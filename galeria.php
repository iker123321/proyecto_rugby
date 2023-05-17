<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';?>

<section>
  <div class="max-w-screen-xl px-4 pt-8 mx-auto sm:px-6 sm:pt-12 lg:px-8">
    <header class="text-center">
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
        Galeria de imágenes
      </h2>

      <p class="max-w-md mx-auto mt-4 text-gray-500">
        Aqui se pueden ver fotos de nuestros equipos
      </p>
    </header>

    <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
      <li>
        <a href="" class="relative block group">
          <img
            src="img/mele.jpg"
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />
        </a>
      </li>

      <li>
        <a href="" class="relative block group">
          <img
            src="img/peques.jpg"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />
        </a>
      </li>

      <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
        <a href="" class="relative block group">
          <img
            src="img/065.jpg"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />
        </a>
      </li>
    </ul>
  </div>
</section>
<section>
  <div class="max-w-screen-xl px-4 pb-8 mx-auto sm:px-6 sm: pb-12 lg:px-8">

    <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
        <li class="lg:col-span-2 lg:col-start-1 lg:row-span-2 lg:row-start-1">
          <a href="" class="relative block group">
            <img
              src="img/037.jpg"
              alt=""
              class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
            />
          </a>
        </li>
      <li>
        <a href="" class="relative block group">
          <img
            src="img/line.jpg"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />
        </a>
      </li>

      <li>
        <a href="" class="relative block group">
          <img
            src="img/carrera.jpg"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />
        </a>
      </li>

    </ul>
  </div>
</section>


<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';?>
