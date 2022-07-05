<?php 

	require_once "../bd/conexion.php";
	require_once "../bd/CrudVehiculo.php";
	
	$obj= new CrudVehiculo ();
    
	$datos=array(
		 $_POST['placa'],
         $_POST['marca'],
         $_POST['color'],
         $_POST['idCliente'],
         $_POST['idCategoria']
	);
	echo $obj->agregar($datos);
 ?>

                                        








