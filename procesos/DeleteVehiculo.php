<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudVehiculo.php";
      
      $obj= new CrudVehiculo();

	echo $obj->eliminar($_POST['placa']);

 ?>