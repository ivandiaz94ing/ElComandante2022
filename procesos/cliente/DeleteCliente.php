<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudCliente.php";
      
      $obj= new CrudCliente();

	echo $obj->eliminar($_POST['cedula']);

 ?>