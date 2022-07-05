<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudUsuario.php";
	
	$obj= new CrudUsuario();
   
	$datos=array(
		 $_POST['usuario'],
         $_POST['correo'],
         $_POST['clave'],
         $_POST['rol']
      
	);
	echo $obj->agregar($datos);
 ?>