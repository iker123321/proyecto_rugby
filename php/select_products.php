<?php
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';
    $sql = "SELECT  producto_id, producto_nombre , producto_precio, stock, producto_imagen FROM 034_products";
    $result = mysqli_query($conn, $sql);
    foreach($result as $entrada){
      if($entrada['stock'] > 0){

        echo '<li>
        <a href="producto.php?producto_id='.$entrada["producto_id"].'" class="block overflow-hidden group">
          <img
            src="img/'.$entrada['producto_imagen'].'"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
          />
 
          <div class="relative pt-3 bg-white">
            <h3
              class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
            >
              '.$entrada["producto_nombre"].'
            </h3>
 
            <p class="mt-2">
              <span class="sr-only"> Precio regular </span>
 
              <span class="tracking-wider text-gray-900"> '.$entrada["producto_precio"].'.00€ </span>
            </p>
          </div>
        </a>
      </li>';
      }
    }
   
    
    
    
    
?>