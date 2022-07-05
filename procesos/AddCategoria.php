<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudCategoria.php";
	
	$obj= new CrudCategoria();
    
	$datos=array(
		 $_POST['nombre']
	);
	echo $obj->agregar($datos);
 ?>