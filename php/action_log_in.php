<?php 

if (isset($_POST['login'])){
    $var_email = $_POST['email'];
    $password = $_POST['password'];

    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';
    //connection to database
   

    //query for all customers
    $sql = "SELECT name, user_id, tipo FROM 034_users WHERE email = '$var_email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    foreach($result as $entrada){
       $nombre = $entrada["name"];
       $user_id = $entrada["user_id"];
       $tipo = $entrada["tipo"];
    }


    if ($nombre){
        session_start();
        $_SESSION['nombre'] = $nombre;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['user_id'] = $user_id;
        $sql = "SELECT cart_products FROM 034_cart WHERE user_id = '$user_id'";
        $resultado = mysqli_query($conn, $sql);
        if ($resultado->num_rows > 0) {
            // $prueba = mysqli_fetch_assoc($resultado)['cart_products'];
        // imprime los datos de la fil
            $prueba = mysqli_fetch_assoc($resultado)['cart_products'];
            // echo gettype($prueba);
            // echo '<script type="text/javascript">
            // document.cookie = "carrito=";
            //</script>';
         $_SESSION['carrito']= $prueba;
         $_SESSION['primera']= 1;
        } else {
        $_SESSION['carrito']='{}';
        // setcookie("carrito",  "{}", [
        //     'samesite' => 'Lax', // Allowed values: "Lax" or "Strict"
        //     'expires' => time() + 86400,
        // ]);
        }
        // print_r();
        echo '<script type="text/javascript">
        window.location.href = "index.php";
        </script>';
    }else{
        echo '<script>alert("Incorrect password")</script>';
    }

}
?>