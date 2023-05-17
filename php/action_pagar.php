<?php
echo '<script>alert("hola")</script>';
if (isset($_POST['pagar'])){
    $var_prueba = $_POST['json'];
    echo $var_prueba;

}


?>