<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudServicio.php";
      
      $obj= new CrudServicio();

	echo $obj->eliminar($_POST['idServicio']);

 ?>