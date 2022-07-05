<?php 

	class CrudEmpleado{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into empleado (cedula,
                                        edad,
                                        nombres,
                                        apellidos,
                                        direccion,
                                        barrio,
                                        telefono,
                                        tipoEmpleado,
                                        estado,
                                        nacionalidad
                                        )
									values ('$datos[0]',
                                            '$datos[1]',
                                            '$datos[2]',
                                            '$datos[3]',
                                            '$datos[4]',
                                            '$datos[5]',
                                            '$datos[6]',
                                            '$datos[7]',
                                            '$datos[8]',
                                            '$datos[9]')";
			return mysqli_query($conexion,$sql);	
	}

    
		public function obtenDatos($cedulaU){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT cedula,
                         edad,
                         nombres,
                         apellidos,
                         direccion,
                         barrio,
                         telefono,
                         tipoEmpleado,
                         estado,
                         nacionalidad,
                         fechaRegistro
					from empleado 
					where cedula='$cedulaU'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'cedula' => $ver[0],
				'edad' => $ver[1],
				'nombres' => $ver[2],
                'apellidos' => $ver[3],
				'direccion' => $ver[4],
				'barrio' => $ver[5],
                'telefono' => $ver[6],
				'tipoEmpleado' => $ver[7],
				'estado' => $ver[8],
                'nacionalidad' => $ver[9],
				'fechaRegistro' => $ver[10]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE empleado set  edad ='$datos[0]',
						               nombres ='$datos[1]',
						               apellidos ='$datos[2]',
                                       direccion ='$datos[3]',
						               barrio ='$datos[4]',
						               telefono ='$datos[5]',
						               tipoEmpleado ='$datos[6]',
						               estado ='$datos[7]',
                                       nacionalidad ='$datos[8]'
						         where cedula ='$datos[9]'";
			
			return mysqli_query($conexion,$sql);
		}

        

        public function eliminar($cedula){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from empleado where cedula='$cedula'";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>