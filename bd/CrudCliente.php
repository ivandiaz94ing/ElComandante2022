<?php

class CrudCliente
{
    public function agregar($datos)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();
        $sql = "INSERT into cliente (cedula,
                                        nombres,
                                        apellidos,
                                        direccion,
                                        barrio,
                                        telefono,
                                        idUsuario,
                                        Tipo_Clinete
                                        )
									values ('$datos[0]',
                                            '$datos[1]',
                                            '$datos[2]',
                                            '$datos[3]',
                                            '$datos[4]',
                                            '$datos[5]',
                                            '$datos[6]',
                                            'Activo')";
        return mysqli_query($conexion, $sql);
    }


    public function obtenDatos($cedulaU)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "SELECT cedula,
                       nombres,
                       apellidos,
                       direccion,
                       barrio,
                       telefono,
                       Tipo_Clinete
					from cliente 
					where cedula='$cedulaU'";

        $result = mysqli_query($conexion, $sql);
        $ver = mysqli_fetch_row($result);

        $datos = array(
            'cedula' => $ver[0],
            'nombres' => $ver[1],
            'apellidos' => $ver[2],
            'direccion' => $ver[3],
            'barrio' => $ver[4],
            'telefono' => $ver[5],
            'Tipo_Clinete' => $ver[6]
        );
        return $datos;
    }

    public function actualizar($datos)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "UPDATE cliente set     nombres ='$datos[0]',
						               apellidos ='$datos[1]',
                                       direccion ='$datos[2]',
						               barrio ='$datos[3]',
						               telefono ='$datos[4]',
						               Tipo_Clinete ='$datos[5]'
						         where cedula ='$datos[6]'";

        return mysqli_query($conexion, $sql);
    }



    public function eliminar($cedula)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "DELETE from cliente where cedula='$cedula'";
        return mysqli_query($conexion, $sql);
    }
}
