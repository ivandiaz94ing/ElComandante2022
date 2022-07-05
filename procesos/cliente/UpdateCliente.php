<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudCliente.php";       
    $obj= new CrudCliente();
	
	$datos=array(

        $_POST['nombresU'],
        $_POST['apellidosU'],
        $_POST['direccionU'],
        $_POST['barrioU'],
        $_POST['telefonoU'],
        $_POST['Tipo_ClineteU'],
        $_POST['cedulaU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>


                                        