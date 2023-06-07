<?php
if($_SERVER['HTTP_HOST'] == "localhost"){
    $conn = mysqli_connect('localhost', 'root', '', '034_menorca');  
}else{
    $conn = mysqli_connect('localhost', 'uro9xbdifljje', '', 'dbsrnzgjklpmou');  
}
//checking connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>