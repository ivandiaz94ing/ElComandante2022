<?php 

	class CrudCategoria{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into categoria (nombre)
									values ('$datos[0]')";
			return mysqli_query($conexion,$sql);	
	}
		public function obtenDatos($idCategoriaU){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT idCategoria,
			             nombre
					from categoria 
					where idCategoria='$idCategoriaU'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idCategoria' => $ver[0],
				'nombre' => $ver[1]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE categoria set  nombre ='$datos[0]'			   
						         where idCategoria='$datos[1]'";
			
			return mysqli_query($conexion,$sql);
		}


        public function eliminar($idCategoria){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from categoria where idCategoria='$idCategoria'";
			return mysqli_query($conexion,$sql);
		}



       

	}

 ?>