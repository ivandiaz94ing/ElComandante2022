<?php 

	class CrudUsuario{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into usuarios (usuario,
			                            correo,
										clave,
										rol,
										estado)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'Activo')";
			return mysqli_query($conexion,$sql);	
	}
		public function obtenDatos($idUsuarioU){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT idUsuario,
			             usuario,
			             correo,
			             clave,
						 rol,
						 estado
					from usuarios 
					where idUsuario='$idUsuarioU'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idUsuario' => $ver[0],
				'usuario' => $ver[1],
				'correo' => $ver[2],
				'clave' => $ver[3],
				'rol' => $ver[4],
				'estado' => $ver[5]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE usuarios set  usuario ='$datos[0]',
			                           correo ='$datos[1]',
									   clave='$datos[2]',
									   rol ='$datos[3]',
									   estado='$datos[4]'			   
						         where idUsuario='$datos[5]'";
			
			return mysqli_query($conexion,$sql);
		}


        public function eliminar($idUsuario){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from usuarios where idUsuario='$idUsuario'";
			return mysqli_query($conexion,$sql);
		}



       

	}

 ?>