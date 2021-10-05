<?php

    
if(!empty($_GET['id'])){
//Credenciales de conexion
$Host = 'localhost';
$Username = 'root';
$Password = '';
$dbName = 'hh20202024';

//Crear conexion mysql
$db = new mysqli($Host, $Username, $Password, $dbName);

//revisar conexion
if($db->connect_error){
   die("Connection failed: " . $db->connect_error);
}

    
    //Extraer imagen de la BD mediante GET
    $result = mysqli_query("SELECT imagen FROM tbl_convoc WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagen']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>