<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';?>

<section class="relative flex flex-wrap lg:h-screen lg:items-center">
    <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Unete al club!</h1>
            
            <p class="mt-4 text-gray-500">
                Forma parte de esta gran familia, y hazte socio para apoyar al club.
            </p>
        </div>
        
        <form action="" class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="POST">
            <div>
                <label for="email" class="sr-only">Email</label>
                
                <div class="relative">
                    <input
                    type="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter email"
                    name = "email"
                    />
                    
                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                />
            </svg>
        </span>
    </div>
</div>

<div>
    <label for="password" class="sr-only">Password</label>
    
    <div class="relative">
        <input
        type="password"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        placeholder="Enter password"
        name = "password"
        />
        
        <span class="absolute inset-y-0 end-0 grid place-content-center px-4" >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 text-gray-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            />
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
            />
        </svg>
    </span>
</div>


</div>
<div class="text-center">
    <input type="submit" value="Confirmar" name = "login" class="rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white hover: cursor-pointer">
</div>

<div class="">
    <p class="text-center text-sm text-gray-500">
        No tienes cuenta?
        <a class="underline" href="signup.php">Regístrate</a>
    </p>
    
    <!-- <a
    type="submit"
    class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
    href="signup.php">Sign in</a> -->
</div>
</form>
</div>

<div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
    <img
    alt="Welcome"
    src="img/065.jpg"
    class="absolute inset-0 h-full w-full object-cover"
    />
</div>
</section>
<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/php/action_log_in.php';?>

<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';?>
