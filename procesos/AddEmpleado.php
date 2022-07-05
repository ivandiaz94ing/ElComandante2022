<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudEmpleado.php";
	
	$obj= new CrudEmpleado ();
    
	$datos=array(
		 $_POST['cedula'],
         $_POST['edad'],
         $_POST['nombres'],
         $_POST['apellidos'],
         $_POST['direccion'],
         $_POST['barrio'],
         $_POST['telefono'],
         $_POST['tipoEmpleado'],
         $_POST['estado'],
         $_POST['nacionalidad']
	);
	echo $obj->agregar($datos);
 ?>










