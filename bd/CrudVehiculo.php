<?php

class CrudVehiculo
{
    public function agregar($datos)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();
        $sql = "INSERT into vehiculo   (placa,
                                        marca,
                                        color,
                                        idCliente,
                                        idCategoria)
									values ('$datos[0]',
                                            '$datos[1]',
                                            '$datos[2]',
                                            '$datos[3]',
                                            '$datos[4]')";
        return mysqli_query($conexion, $sql);
    }


    public function obtenDatos($placaU)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "SELECT placa,
                       marca,
                       color,
                       idCliente,
                       idCategoria
					from vehiculo 
					where placa='$placaU'";

        $result = mysqli_query($conexion, $sql);
        $ver = mysqli_fetch_row($result);

        $datos = array(
            'placa' => $ver[0],
            'marca' => $ver[1],
            'color' => $ver[2],
            'idCliente' => $ver[3],
            'idCategoria' => $ver[4]
        );
        return $datos;
    }

    public function actualizar($datos)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "UPDATE vehiculo set    marca ='$datos[0]',
                                       color ='$datos[1]',
						               idCliente ='$datos[2]',
						               idCategoria ='$datos[3]'
						         where placa ='$datos[4]'";

        return mysqli_query($conexion, $sql);
    }



    public function eliminar($placa)
    {
        $obj = new conectar();
        $conexion = $obj->conexion();

        $sql = "DELETE from vehiculo where placa='$placa'";
        return mysqli_query($conexion, $sql);
    }
}
