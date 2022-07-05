<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudCliente.php";
	
	$obj= new CrudCliente ();
	session_start();
    $id = $_SESSION['idUsuario'];
	$datos=array(
		 $_POST['cedula'],
         $_POST['nombres'],
         $_POST['apellidos'],
         $_POST['direccion'],
         $_POST['barrio'],
         $_POST['telefono'],
		 $id
	);
	echo $obj->agregar($datos);
 ?>










