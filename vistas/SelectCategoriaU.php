<?php

require_once "conn.php";
$obj = new conectar();
$conexion = $obj->conexion();
$sql = ("SELECT idCategoria ,nombre from categoria ");
$result = mysqli_query($conexion, $sql);
?>

<div class="form-group row">
    <div class="col-md-12">
        <label class="control-label">Categoria:</label>
            <select id="idCategoriaU" name="idCategoriaU" class="form-control" required="required">
                <option value="">-- Seleccione Una Categoria --</option>
                <?php
                while ($mostrar = mysqli_fetch_row($result)) {
                ?>
                    <option value="<?php echo $mostrar[0] ?>"><?php echo $mostrar[1] ?></option>
                <?php }

                ?>
            </select>
    </div>
</div>


     