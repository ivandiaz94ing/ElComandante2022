<?php

require_once "conn.php";
$obj = new conectar();
$conexion = $obj->conexion();
$sql = ("SELECT idServicio, CONCAT(nombre,' - ','$',precio) from servicio ");
$result = mysqli_query($conexion, $sql);
?>

<div class="form-group row">
    <div class="col-md-12">
        <label class="control-label">Servicio:</label>
            <select id="idServicioU" name="idServicioU" class="form-control" required="required">
                <option value="">-- Seleccione Una Servicio --</option>
                <?php
                while ($mostrar = mysqli_fetch_row($result)) {
                ?>
                    <option value="<?php echo $mostrar[0] ?>"><?php echo $mostrar[1] ?></option>
                <?php }

                ?>
            </select>
    </div>
</div>
