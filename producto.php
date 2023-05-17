<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';
        $var_producto_id = $_GET["producto_id"];
        include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';
        $sql = "SELECT producto_nombre , producto_precio, producto_descripcion, producto_imagen_detalle FROM 034_products WHERE producto_id = $var_producto_id";
        $result = mysqli_query($conn, $sql);
        foreach($result as $entrada){
?>

<section>
  <div class="relative mx-auto max-w-screen-xl px-4 py-8">
    <div>
      <h1 class="text-2xl font-bold lg:text-3xl"><?php echo $entrada["producto_nombre"];?></h1>
    </div>

    <div class="grid gap-8 lg:grid-cols-4 lg:items-start">
      <div class="lg:col-span-3">
        <div class="relative mt-4">
          <img
            alt="Tee"
            src="<?php echo "img/".$entrada['producto_imagen_detalle'];?>"
            class="h-72 w-50 rounded-xl object-cover lg:h-[540px]"
          />
        </div>

        <!-- <ul class="mt-1 flex gap-1">
          <li>
            <img
              alt="Tee"
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-16 w-16 rounded-md object-cover"
            />
          </li>

          <li>
            <img
              alt="Tee"
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-16 w-16 rounded-md object-cover"
            />
          </li>

          <li>
            <img
              alt="Tee"
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-16 w-16 rounded-md object-cover"
            />
          </li>

          <li>
            <img
              alt="Tee"
              src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-16 w-16 rounded-md object-cover"
            />
          </li>
        </ul> -->
      </div>
      <?php if ((strpos($entrada["producto_nombre"], "Mochila") !== false)) {
            echo ' 
            <div class="lg:sticky lg:top-0">
              <form class="space-y-4 lg:pt-8" method = "POST">';
            }else{
              echo '<div class="lg:sticky lg:top-0">
              <form class="space-y-4 lg:pt-8" method = "POST">
                <fieldset>
                  <legend class="text-lg font-bold">Color</legend>
      
                  <div class="mt-2 flex flex-wrap gap-1">
                    <label for="color_green" class="cursor-pointer">
                      <input
                        type="radio"
                        id="color_green"
                        name="color"
                        value = "verde"
                        class="peer sr-only"
                        checked
                      />
      
                      <span
                        class="block h-6 w-6 rounded-full border border-gray-200 bg-green-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                      ></span>
                    </label>
      
                    <label for="color_blue" class="cursor-pointer">
                      <input
                        type="radio"
                        id="color_blue"
                        name="color"
                        value = "azul oscuro"
                        class="peer sr-only"
                      />
      
                      <span
                        class="block h-6 w-6 rounded-full border border-gray-200 bg-blue-900 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                      ></span>
                    </label>
      
                    <label for="color_pink" class="cursor-pointer">
                      <input
                        type="radio"
                        id="color_pink"
                        name="color"
                        value = "rosa"
                        class="peer sr-only"
                      />
      
                      <span
                        class="block h-6 w-6 rounded-full border border-gray-200 bg-pink-200 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                      ></span>
                    </label>
      
                    <label for="color_red" class="cursor-pointer">
                      <input
                        type="radio"
                        id="color_red"
                        name="color"
                        value = "azul claro"
                        class="peer sr-only"
                      />
      
                      <span
                        class="block h-6 w-6 rounded-full border border-gray-200 bg-blue-300 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                      ></span>
                    </label>
                  </div>
                </fieldset>
                <div class="flex flex-wrap gap-1">
                    <label for="size_xs" class="cursor-pointer">
                      <input
                        type="radio"
                        name="size"
                        value = "XS"
                        id="size_xs"
                        class="peer sr-only"
                        checked
                      />
      
                      <span
                        class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white"
                      >
                        XS
                      </span>
                    </label>
      
                    <label for="size_s" class="cursor-pointer">
                      <input
                        type="radio"
                        name="size"
                        value = "S"
                        id="size_s"
                        class="peer sr-only"
                      />
      
                      <span
                        class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white"
                      >
                        S
                      </span>
                    </label>
      
                    <label for="size_m" class="cursor-pointer">
                      <input
                        type="radio"
                        name="size"
                        value = "M"
                        id="size_m"
                        class="peer sr-only"
                      />
      
                      <span
                        class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white"
                      >
                        M
                      </span>
                    </label>
      
                    <label for="size_l" class="cursor-pointer">
                      <input
                        type="radio"
                        name="size"
                        value = "L"
                        id="size_l"
                        class="peer sr-only"
                      />
      
                      <span
                        class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white"
                      >
                        L
                      </span>
                    </label>
      
                    <label for="size_xl" class="cursor-pointer">
                      <input
                        type="radio"
                        name="size"
                        value = "XL"
                        id="size_xl"
                        class="peer sr-only"
                      />
      
                      <span
                        class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white"
                      >
                        XL
                      </span>
                    </label>
                  </div>';
            }
          ?>
      

          <div class="rounded border bg-gray-100 p-4">
            <p class="text-sm">
              <span class="block"> Hazte socio y paga un 5% menos</span>
              <a href="socio.php" class="mt-1 inline-block underline">Encuentralo aquí</a>
            </p>
          </div>

          <div>
            <p class="text-xl font-bold"><?php echo $entrada["producto_precio"].".00€";?></p>
          </div>
         
          <input type="text" name = "producto_nombre" value ="<?php echo $entrada['producto_nombre']?>" hidden>
          <input type="number" name = "producto_precio" value ="<?php echo $entrada['producto_precio']?>" hidden>
          <input href = "producto.php?producto_id=<?php echo $var_producto_id;?>" type="submit" name = "add" value="Añadir al carrito" class="w-full rounded bg-indigo-600 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white hover:bg-indigo-700 cursor-pointer">

          <button
            type="button"
            class="w-full rounded border border-gray-300 bg-gray-100 px-6 py-3 text-sm font-bold uppercase tracking-wide"
          >
            Avisame cuando esté disponible
          </button>
        </form>
      </div>

      <div class="lg:col-span-3">
        <div class="prose max-w-none">
          <p>
            <?php echo $entrada["producto_descripcion"];?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    }
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/php/action_add_to_cart.php';?>