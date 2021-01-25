<?php

include ("ok.php");

$sql=mysqli_query( $conn, "SELECT * FROM citas");

?>
<?php

$consulta=mysqli_query($conn, "call sp_citas()");

?>

<table border="1" >
<tr>
    <td>Fecha:</td>
    <td>Hora:</td>
    <td>Area:</td>
    <td>Numero de Cita:</td>
</tr>
<?php
while($fila = mysqli_fetch_array($consulta)){
    echo "<tr>";
    echo "<td>".$fila['fecha']."</td>";
    echo "<td>".$fila['hora']."</td>";
    echo "<td>".$fila['ar']."</td>";
    echo "<td>".$fila['id']."</td>";
    echo "</tr>";
}
?>
</table>

