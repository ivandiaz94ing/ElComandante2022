<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudServicio.php";
	
	$obj= new CrudServicio();
    
	$datos=array(
		 $_POST['nombre'],
         $_POST['precio'],
         $_POST['idCategoria']
	);
	echo $obj->agregar($datos);
 ?>