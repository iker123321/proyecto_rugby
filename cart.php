<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';?>
<script>
  window.onload = function() {
actualizarCarrito();
};
</script>

<div>
  <section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <div class="mx-auto max-w-3xl">
      <header class="text-center">
        <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">Tu carrito</h1>
      </header>

      <div class="mt-8" >
        <ul class="space-y-4" id="carrito">

        </ul>
        <form id = "miFormulario" method="POST">
        <div class="mt-8 flex justify-end border-t border-gray-100 pt-8"  id="ticket">
          <div class="w-screen max-w-lg space-y-4">
            <dl class="space-y-0.5 text-sm text-gray-700">
              <div class="flex justify-between">
                <dd id="nombre"></dd>
                <!-- <dt>Subtotal</dt> -->
                <dd id="subtotal"></dd>
              </div>

              <div class="flex justify-between !text-base font-medium">
                <dt>Total</dt>
                <dd id="total"></dd>
              </div>
            </dl>

            <div class="flex justify-end">
              <input type="text" name="json" value = "" hidden>
              <button
                type="submit"
                name="pagar"
                onclick="enviarJson();"
                class="block rounded bg-gray-700 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600"
              >
                Pagar
              </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';?>
