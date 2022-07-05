<?php 
	require_once "../bd/conexion.php";
    require_once "../bd/CrudUsuario.php";       
    $obj= new CrudUsuario();
	
	$datos=array(
        $_POST['usuarioU'],
        $_POST['correoU'],
        $_POST['claveU'],
        $_POST['rolU'],
        $_POST['estadoU'],
        $_POST['idUsuarioU']
        );
    					 
	echo $obj->actualizar($datos);
    
 ?>