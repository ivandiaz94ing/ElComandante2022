<?php

require_once "conn.php";
$obj = new conectar();
$conexion = $obj->conexion();
$sql = ("SELECT cedula ,CONCAT(cedula,' - ',nombres, ' ', apellidos) from cliente ");
$result = mysqli_query($conexion, $sql);
?>
<div class="form-group row">
    <div class="col-md-12">

        <label class="control-label">Propietario del Vehiculo:</label>
            <select id="idCliente" name="idCliente" class="form-control" style="width:100%" required="required">
                <option value="">-- Seleccione Una Propietario --</option>
                <?php
                while ($mostrar = mysqli_fetch_row($result)) {
                ?>
                    <option value="<?php echo $mostrar[0] ?>"><?php echo $mostrar[1] ?></option>
                <?php }
                ?>
            </select>
       
    </div>
</div>