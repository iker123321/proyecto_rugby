<?php
 include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';

echo "<script>console.log(".$var_nombre.")</script>";
$contenido = file_get_contents('php://input');

if($var_nombre != " "){
    $user_id = $_SESSION['user_id'];
    // Obtiene el JSON del carrito desde el archivo script.js
    
    // $carrito = $_POST['carrito'];
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';

// Inserta los datos en la tabla 034_cart
$sql = "UPDATE 034_cart SET cart_products = '$contenido' WHERE user_id = '$user_id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>console.log(Los datos han sido insertados correctamente)</script>";
} else {
    echo "<script>console.log(Error)</script>";
}
}
?>

