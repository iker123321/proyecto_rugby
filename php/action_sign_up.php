<?php 

if (isset($_POST['signup'])){
    $var_email = $_POST['email'];
    $var_nombre = $_POST['nombre'];
    $var_apellidos = $_POST['apellidos'];
    $var_dni = $_POST['dni'];
    $var_password = $_POST['password'];
    $var_password_confirmacion = $_POST['password_confirmation'];
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';
    //connection to database
   
    if($var_password == $var_password_confirmacion){

        $sql = "INSERT INTO 034_users (user_id, name, lastname, documento_identidad, tipo, email, password) VALUES (DEFAULT, '$var_nombre', '$var_apellidos', '$var_dni', 'normal', '$var_email', '$var_password')";
    
    
        if (mysqli_query($conn,$sql)) {
            echo '<script type="text/javascript">window.location.href = "login.php";</script>';

        }else{
            echo 'querry_error' . mysqli_error($conn);
        }
    }else{
        echo '<script>alert("Las contraseña no coinciden")</script>';
    }
    //query for all customers

}
?>