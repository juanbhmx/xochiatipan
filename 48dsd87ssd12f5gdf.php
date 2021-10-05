<?php

require("ok.php");
$nombre =$_POST['nombre'];
$ap     =$_POST['ap'];
$email  =$_POST['email'];
$fecha  =$_POST['fecha'];
$hora   =$_POST['hora'];
$ar     =$_POST['ar'];

$dato = mysqli_query($conn, "SELECT * FROM `tbl_citaconf` WHERE `fecha`='".$fecha."' and `hora` ='".$hora."' and `ar` ='".$ar."'" ) or die(mysqli_error($conn));

$duplicado =mysqli_num_rows($dato);
if($duplicado==1){

    //echo "<script> alert(".var_dump($dato).") </script>";
    echo "<script> alert('Hora ocupada, por favor escoge otra!') </script>";
    include('cita.php');
   
        }else{
            mysqli_query($conn,("INSERT INTO citas (nombre, ap, email, fecha, hora, ar) values ('$nombre', '$ap', '$email', '$fecha','$hora', '$ar')"));
            echo "<script> alert('Datos Ingresados correctamente a la base de datos') </script>"; 
            include('c04f9a52et2sa2f43as5f6a322asd5f.php');

        }     
?>