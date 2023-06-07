<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header2.php';?>


<div class="grid grid-cols-3 gap-10 m-20">
  <div class="mt-5">
    <?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/php/action_numero_socios.php';?>
    <?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/php/select_orders_months.php';?>

  </div>

<div class="col-span-2">
<div>
            <canvas id="grafico"></canvas>
        </div>
</div>

</div>



<!-- 
<div class="p-0 block md:grid grid-rows-3 grid-flow-col gap-4 p-20">
    <div class="col-span-2 mt-4">
   
<article
        class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6"
        >
  <span class="rounded-full bg-blue-100 p-3 text-blue-600">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-8 w-8"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      stroke-width="2"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
      />
    </svg>
  </span>

  <div>
    <p class="text-2xl font-medium text-gray-900">30</p>

    <p class="text-sm text-gray-500">Numero de socios</p>
  </div>
</article>
    </div>
    <div class="row-span-3">
        <div class="w-9/12 pb-4 md: w-2/12 mx-auto">
            <canvas id="grafico"></canvas>
        </div>
        <div class="w-full md: w-4/12">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

</div> -->





<!-- <script src="js/script.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/analisis.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200
  });
</script>
</body>
</html>