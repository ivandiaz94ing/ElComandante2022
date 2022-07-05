<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudVehiculo.php";       
    $obj= new CrudVehiculo();
	
	$datos=array(
        $_POST['marcaU'],
        $_POST['colorU'],
        $_POST['idClienteU'],
        $_POST['idCategoriaU'],
        $_POST['placaU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>
