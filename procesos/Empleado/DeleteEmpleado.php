<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudEmpleado.php";
      
      $obj= new CrudEmpleado();

	echo $obj->eliminar($_POST['cedula']);

 ?>