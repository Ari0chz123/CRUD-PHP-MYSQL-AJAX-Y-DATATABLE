<?php
class Persona{
    public function mostrar()
    {
        $obj = new Conexion();
        $ccn = $obj->conectado();
        $consulta = "SELECT * from persona";
        return mysqli_query($ccn,$consulta);
    }
    public function registrar($datos)
    {
        $obj = new Conexion();
        $ccn = $obj->conectado();
        $consulta = "INSERT INTO persona(nombres,apellidos,email,direccion,foto,fecha_nacimiento)
        VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
        return mysqli_query($ccn,$consulta);
    }
    public function editar($datos)
    {
        $obj = new Conexion();
        $ccn = $obj->conectado();
        $consulta = "UPDATE persona set nombres='$datos[0]',apellidos='$datos[1]',email='$datos[2]',
        direccion='$datos[3]',foto='$datos[4]',fecha_nacimiento='$datos[5]'
        where idpersona=$datos[6]";
        return mysqli_query($ccn,$consulta);
    }
    public function eliminar($id)
    {
        $obj = new Conexion();
        $ccn = $obj->conectado();
        $consulta = "DELETE FROM persona where idpersona=$id";
        return mysqli_query($ccn,$consulta);
    }
}

?>