<?php 
$conexion=mysqli_connect('localhost','root','','lavaderobd');
$idCliente=$_POST['idClienteU'];

	$sql="SELECT placa,
			 idCliente,
			 CONCAT(placa,' - ',marca) 
		from vehiculo 
		where idCliente='$idCliente'";

	$result=mysqli_query($conexion,$sql);
    

    
	$cadena="<label>Vehiculos</label> 
			<select  class='form-control' id='placaU' name='placaU' required='required'>
			<option>--Seleccione Un Vehiculo--</option> ";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';

	}

	echo  $cadena."</select>";
