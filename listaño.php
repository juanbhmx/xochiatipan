<div class="row">
    <div class="col-sm-12">
        <form class="form-inline">
            <div class="form-group mb-2">
                <label>Año</label>
            </div>
            <div>
                <div class="form-group mx-sm-3 mb-2">
                    <select name="listaños" id="listaños" onchange="llenartable($(this).val())">
                        <option value="0"> Todos </option>
                        <?php
                            require_once('ok.php');
                            $sql="SELECT * from tbl_años order by año";
                            $resultado=mysqli_query($conn, $sql);
                            while($registro=mysqli_fetch_array($resultado)){
                                echo "<option value='".$registro['id']."'> ".$registro['año']."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>