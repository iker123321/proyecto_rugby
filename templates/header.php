<?php
session_start();

if(isset($_SESSION['nombre']) != false){
    $var_nombre = $_SESSION["nombre"];
}else{
    $var_nombre = " ";
}
if(isset($_SESSION['carrito']) != false){
    if($_SESSION['primera'] == 1){
        $prueba = $_SESSION["carrito"];
        $_SESSION['primera'] = 2;
        setcookie("carrito", $prueba, [
            'samesite' => 'Lax', // Allowed values: "Lax" or "Strict"
            'expires' => time() + 86400,
        ]);
    }
}else{
    $aver = 0;
    $prueba = '{}';
}
// echo gettype($prueba);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js" integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="src/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>  
    <script src="https://kit.fontawesome.com/45df7cb5a1.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Menorca Rugby</title>
</head>
<body>
<header>
  <nav x-data="{ isOpen: false }" class="relative bg-blue-900 shadow dark:bg-gray-800 z-1000">
    <div class="container px-6 py-4 mx-auto lg:flex lg:justify-between lg:items-center">
        <div class="flex items-center justify-between">
            <a href="index.php" class="flex">
                <p class="font-semibold text-2xl text-white sm: text-xl">MENORCA RUGBY</p>
                <img class="w-auto h-6 sm:h-7 mt-1 ml-2" src="img/logo.png" alt="">
            
            </a>

            <!-- Mobile menu button -->
            <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-white hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>
            
                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-blue-900 dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
            <div class="flex flex-col lg:flex-row lg:mx-6">
                <a class="my-2 text-white transition-colors duration-300 transform dark:text-white hover:text-blue-500 dark:hover:text-white lg:mx-4 lg:my-0" href="index.php">Inicio</a>
                <a class="my-2 text-white transition-colors duration-300 transform dark:text-white hover:text-blue-500 dark:hover:text-white lg:mx-4 lg:my-0" href="tienda.php">Tienda</a>
                <a class="my-2 text-white transition-colors duration-300 transform dark:text-white hover:text-blue-500 dark:hover:text-white lg:mx-4 lg:my-0" href="galeria.php">Galeria</a>
                <a class="my-2 text-white transition-colors duration-300 transform dark:text-white hover:text-blue-500 dark:hover:text-white lg:mx-4 lg:my-0" href="nosotros.php">Nosotros</a>
                <a class="my-2 text-white transition-colors duration-300 transform dark:text-white hover:text-blue-500 dark:hover:text-white lg:mx-4 lg:my-0" href="contacto.php">Contacto</a>
                
            </div>
            <?php
            if($var_nombre == " "){
                echo'<a class="mr-4 inline-block rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="login.php">Log in</a>';
            }
            ?>

            <!-- <div class="flex lg:block sm: mt-2">
                <a class="relative text-white transition-colors duration-300 transform dark:text-white hover:text-gray-600 dark:hover:text-gray-300" href="cart.php">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    
                    <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                </a>
            </div> -->
            <?php
            if($var_nombre !== " "){
                
                echo'
                <a class = "text-white mr-4">Bienvenido '.$var_nombre.'!</a>
                <a href = "cuenta.php" class = "text-left m-0 p-0"><i class="fa-regular fa-circle-user fa-xl hover: color-blue-200" style="color: #ffffff;"></i></a><br><br>
                <a class="mx-0 sm:mx-4 rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500" href="php/action_log_out.php">Log out</a>
                <div class="flex lg: mb-4 sm: mt-2">
                            <a class="mt-0 sm: mt-3 relative text-white transition-colors duration-300 transform dark:text-white hover:text-gray-600 dark:hover:text-gray-300" href="cart.php">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <!-- <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span> -->
                            </a>
                            
                            <p class="ml-1 text-white mt-2" id="cantidad"></p>
                </div>';
            }
            ?>
        </div>
    </div>
</nav>

</header>