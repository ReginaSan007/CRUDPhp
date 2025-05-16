<?php  
function conectar(){
    $host = "localhost:8889";
    $user = "root";
    $pass = "root";
    $bd = "proyectophp";
    $conn = mysqli_connect($host, $user, $pass, $bd);
    mysqli_select_db($conn, $bd);
    return $conn;
}
?>