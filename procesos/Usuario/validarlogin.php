<?php 
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: vistas/Principal.php');
}else
{
	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su calve';
		}else{
			require_once "procesos/conexion.php";
			$usuario = mysqli_real_escape_string($conection,$_POST['usuario']);
			$clave = mysqli_real_escape_string($conection,$_POST['clave']);
			$query = mysqli_query($conection,"SELECT * FROM usuarios WHERE usuario= '$usuario' and clave= '$clave' ");
			mysqli_close($conection);
			$result = mysqli_num_rows($query);

			if($result > 0)
			{
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUsuario'] = $data['idUsuario'];
				$_SESSION['correo'] = $data['correo'];
				$_SESSION['usuario'] = $data['usuario'];
				$_SESSION['rol']    = $data['rol'];
				$_SESSION['estado']    = $data['estado'];
				header('location: vistas/Principal.php');
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}
		}

	}
}
?>