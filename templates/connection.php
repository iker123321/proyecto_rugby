<?php

$conn = mysqli_connect('localhost', 'root', '', '034_menorca');  
//checking connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>