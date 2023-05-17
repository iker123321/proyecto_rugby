<?php
if(isset($_POST["add"])){
    $var_producto = $_POST["producto_nombre"];
    $var_precio = $_POST["producto_precio"];
    if(strpos($var_producto, "Mochila") !== false) {
        echo '<script>agregarAlCarrito("'.$var_producto.'",'.$var_precio.')</script>';
    }else{
        $var_color = $_POST["color"];
        $var_size = $_POST["size"];
        $var_producto_completo = $var_producto." ".$var_color." ".$var_size;
        echo '<script>agregarAlCarrito("'.$var_producto_completo.'",'.$var_precio.')</script>';
    }
}
?>