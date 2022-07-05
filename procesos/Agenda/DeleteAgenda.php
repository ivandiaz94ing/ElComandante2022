
<?php 
  	require_once "../bd/conexion.php";
      require_once "../bd/CrudAgenda.php";
      
      $obj= new CrudAgenda();

	echo $obj->eliminar($_POST['id_agenda']);

 ?>