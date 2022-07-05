<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudEmpleado.php";
	
	$obj= new CrudEmpleado();
	echo json_encode($obj->obtenDatos($_POST['cedulaU']));
 ?>