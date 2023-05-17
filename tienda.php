<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';?>
<section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
        Productos del club
      </h2>

      <p class="max-w-xl mx-auto mt-4 text-gray-500">
      Gracias a la compra de alguno de estos productos aportas mucho al club.
      </p>
    </header>

    <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">

      <?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/php/select_products.php';?>

    </ul>
  </div>
</section>

<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';?>
