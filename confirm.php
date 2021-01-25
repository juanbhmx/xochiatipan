<?php

include ("ok.php");

$result=mysqli_query($conn, "CALL sp_citasconf()") or die("Falla en la llamada: " . mysqli_error());

?>