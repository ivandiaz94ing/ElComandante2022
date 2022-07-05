<?php 
	
    require_once "../bd/conexion.php";
	require_once "../bd/CrudAgenda.php";
	
	$obj= new CrudAgenda();
	echo json_encode($obj->obtenDatos($_POST['id_agendaU']));
 ?>