<?php 

	class CrudServicio{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into servicio (nombre,precio,idCategoria)
									values ('$datos[0]','$datos[1]','$datos[2]')";
			return mysqli_query($conexion,$sql);	
	}
		public function obtenDatos($idServicioU){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT idServicio,
			             nombre,
						 precio,
						 idCategoria
					from servicio 
					where idServicio='$idServicioU'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idServicio' => $ver[0],
				'nombre' => $ver[1],
				'precio' => $ver[2],
				'idCategoria' => $ver[3]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE servicio set  nombre ='$datos[0]',
						               precio ='$datos[1]',
						               idCategoria ='$datos[2]'
						         where idServicio='$datos[3]'";
			
			return mysqli_query($conexion,$sql);
		}


        public function eliminar($idServicio){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from servicio where idServicio='$idServicio'";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>