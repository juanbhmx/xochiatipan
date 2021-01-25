<?php
$conn = new mysqli("localhost", "root", "", "hh20202024");

if($conn->connect_error){
    die("Conexion fallida: " . $conn->connect_error);
}
?>