<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudCategoria.php";       
    $obj= new CrudCategoria();
	
	$datos=array(
        $_POST['nombreU'],
        $_POST['idCategoriaU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>