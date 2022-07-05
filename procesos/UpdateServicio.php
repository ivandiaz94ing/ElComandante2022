<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudServicio.php";       
    $obj= new CrudServicio();
	
	$datos=array(
        $_POST['nombreU'],
        $_POST['precioU'],
        $_POST['idCategoriaU'],
        $_POST['idServicioU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>