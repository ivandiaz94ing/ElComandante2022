<?php 

	class CrudAgenda{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into agenda (  fecha,
                                        hora,
                                        estado,
                                        idCliente,
                                        placa,
                                        empleado,
                                        idServicio
                                        )
									values ('$datos[0]',
                                            '$datos[1]',
                                            '$datos[2]',
                                            '$datos[3]',
                                            '$datos[4]',
                                            '$datos[5]',
                                            '$datos[6]')";
			return mysqli_query($conexion,$sql);	
	}

    
		public function obtenDatos($id_agendaU){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_agenda,
                         fecha,
                         hora,
                         estado,
                         idCliente,
                         placa,
                         empleado,
                         idServicio
					from agenda 
					where id_agenda='$id_agendaU'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_agenda' => $ver[0],
				'fecha' => $ver[1],
				'hora' => $ver[2],
                'estado' => $ver[3],
				'idCliente' => $ver[4],
				'placa' => $ver[5],
                'empleado' => $ver[6],
				'idServicio' => $ver[7]
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

        

        public function eliminar($id_agenda){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from agenda where id_agenda ='$id_agenda'";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>