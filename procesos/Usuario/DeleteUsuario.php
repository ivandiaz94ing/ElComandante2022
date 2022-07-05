<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudUsuario.php";
      
      $obj= new CrudUsuario();

	echo $obj->eliminar($_POST['idUsuario']);

 ?>