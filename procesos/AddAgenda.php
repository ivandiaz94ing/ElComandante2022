<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudAgenda.php";
	
	$obj= new CrudAgenda ();
    
	$datos=array(
		 $_POST['fecha'],
         $_POST['hora'],
         $_POST['estado'],
         $_POST['idCliente'],
         $_POST['placa'],
         $_POST['empleado'],
         $_POST['idServicio']
	);
	echo $obj->agregar($datos);
 ?>







 








