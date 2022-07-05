<?php 

	class CrudSolicitud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into solicitud (nit,
                                         nombre,
                                         ciudad,
                                         Direccion,
                                         telefono,
                                         sitioweb,
                                         actividades,
                                         nombrecontacto,
                                         cargo,
                                         celular,
                                         correo,
                                         programa,
                                         tipopractica,
                                         funciones,
                                         remuneracion,
                                         valor,
                                         observaciones,
										 idUsuario,
										 estado)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
                                            '$datos[4]',
											'$datos[5]',
											'$datos[6]',
											'$datos[7]',
                                            '$datos[8]',
											'$datos[9]',
											'$datos[10]',
											'$datos[11]',
                                            '$datos[12]',
                                            '$datos[13]',
                                            '$datos[14]',
                                            '$datos[15]',
											'$datos[16]',
											'$datos[17]',
											'PENDIENTE')";
			return mysqli_query($conexion,$sql);	
	}
		public function obtenDatos($idnitU){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT idnit,
			             nit,
			             nombre,
			             ciudad,
			             Direccion,
			             telefono,
			             sitioweb,
			             actividades,
			             nombrecontacto,
			             cargo,
			             celular,
			             correo,
			             programa,
			             tipopractica,
			             funciones,
			             remuneracion,
			             valor,
			             observaciones,
			             estado             
					from solicitud 
					where idnit='$idnitU'";
		
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
				'idnit' => $ver[0],
			    'nit' => $ver[1],
			    'nombre' => $ver[2],
			    'ciudad' => $ver[3],
			    'Direccion' => $ver[4],
			    'telefono' => $ver[5],
			    'sitioweb' => $ver[6],
			    'actividades' => $ver[7],
			    'nombrecontacto' => $ver[8],
			    'cargo' => $ver[9],
			    'celular' => $ver[10],
			    'correo' => $ver[11],
			    'programa' => $ver[12],
			    'tipopractica' => $ver[13],
			    'funciones' => $ver[14],
			    'remuneracion' => $ver[15],
			    'valor' => $ver[16],
			    'observaciones' => $ver[17],
			    'estado' => $ver[18]   
				);
			return $datos;
		}
		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE solicitud set  nombre='$datos[0]',
			                           ciudad='$datos[1]',
									   Direccion ='$datos[2]',
									   telefono= '$datos[3]',
									   sitioweb='$datos[4]',
			                           actividades='$datos[5]',
									   nombrecontacto ='$datos[6]',
									   cargo= '$datos[7]',
									   celular='$datos[8]',
			                           correo='$datos[9]',
									   tipopractica ='$datos[10]',
									   funciones= '$datos[11]',
									   remuneracion='$datos[12]',
									   valor ='$datos[13]',
									   funciones= '$datos[14]',
									   observaciones = '$datos[15]',
									   estado = '$datos[16]'			   
						         where idnit ='$datos[17]'";
			
			return mysqli_query($conexion,$sql);
		}



		 
        public function eliminar($idnit){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from solicitud where idnit='$idnit'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>