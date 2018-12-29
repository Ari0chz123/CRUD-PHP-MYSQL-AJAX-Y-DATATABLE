<?php
require '../clases/Conexion.php';
require '../clases/Persona.php';
$obj = new Persona();
$id = $_POST['txtiidpersonaelimina'];
echo $obj->eliminar($id);
?>