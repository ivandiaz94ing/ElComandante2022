<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudCliente.php";
	
	$obj= new CrudCliente();
	echo json_encode($obj->obtenDatos($_POST['cedulaU']));
 ?>