<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudVehiculo.php";
	
	$obj= new CrudVehiculo();
	echo json_encode($obj->obtenDatos($_POST['placaU']));
 ?>