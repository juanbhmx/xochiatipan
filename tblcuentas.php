
<table>
    <thead>
        <tr>
            <th>Documento</th>
            <th>Año</th>
            <th>Trimestre</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            require('ok.php');
            $sql=$_POST['sql'];
            $resultado=mysqli_query($conn, $sql) or die ("error en la consulta".mysqli_error());
            while($registro=mysqli_fetch_array($resultado)){
                $datos=$registro['id']."||".$registro['namea']."||".$registro['año']."||".$registro['trimestre'];
                ?>
                <tr>
                    <th>
                        <td scope="row"><?php echo $registro['id']; ?></td>
                        <td><?php echo $registro['namea']; ?></td>
                        <td><?php echo $registro['año']; ?></td>
                        <td><?php echo $registro['trimestre']; ?></td>
                    </th>
                </tr>
            <?php } ?>
        
    </tbody>
</table>