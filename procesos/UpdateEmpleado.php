<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudEmpleado.php";       
    $obj= new CrudEmpleado();
	
	$datos=array(
        $_POST['edadU'],
        $_POST['nombresU'],
        $_POST['apellidosU'],
        $_POST['direccionU'],
        $_POST['barrioU'],
        $_POST['telefonoU'],
        $_POST['tipoEmpleadoU'],
        $_POST['estadoU'],
        $_POST['nacionalidadU'],
        $_POST['cedulaU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>


                                        