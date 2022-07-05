<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudCategoria.php";
	
	$obj= new CrudCategoria();
	echo json_encode($obj->obtenDatos($_POST['idCategoriaU']));
 ?>