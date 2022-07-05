<?php

require_once "conn.php";
$obj = new conectar();
$conexion = $obj->conexion();
$sql = ("SELECT cedula ,CONCAT(cedula,' - ',nombres, ' ', apellidos) from empleado where estado = 'Laborando' and 	tipoEmpleado = 'Trabajador'    ");
$result = mysqli_query($conexion, $sql);
?>
<div class="form-group row">
    <div class="col-md-12">

        <label class="control-label">Asignar Empleado:</label>
            <select id="empleadoU" name="empleadoU" class="form-control" style="width:100%" required="required">
                <option value="">-- Seleccione Una Empleado --</option>
                <?php
                while ($mostrar = mysqli_fetch_row($result)) {
                ?>
                    <option value="<?php echo $mostrar[0] ?>"><?php echo $mostrar[1] ?></option>
                <?php }
                ?>
            </select>
       
    </div>
</div>