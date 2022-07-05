<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudServicio.php";
	
	$obj= new CrudServicio();
	echo json_encode($obj->obtenDatos($_POST['idServicioU']));
 ?>