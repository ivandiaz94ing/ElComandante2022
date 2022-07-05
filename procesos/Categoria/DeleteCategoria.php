<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudCategoria.php";
      
      $obj= new CrudCategoria();

	echo $obj->eliminar($_POST['idCategoria']);

 ?>