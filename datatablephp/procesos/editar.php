<?php
require_once '../clases/Conexion.php';
require_once '../clases/Persona.php';
//obtener el nombre de la imagenes
$nombreimg = $_FILES['txtfilee']['name'];
//ruta actual
$rutaactual = $_FILES['txtfilee']['tmp_name'];
//rutafinal
$carpeta = "../imagenes/";
$sinfoto = "../imagenes/sinfoto.png";
$rutafinal = $carpeta.$nombreimg;
$obj = new Persona();

if(empty($_POST['txtnombrese']) or empty($_POST['txtapellidose']) or empty($_POST['txtemaile']) or empty($_POST['txtdireccione']) or empty($_POST['txtnacimientoe']))
{
    echo "v";
}
else
{
//Aca es cuando se ingreso una imagen
if(move_uploaded_file($rutaactual,$rutafinal))
{
        $datos = array(
        $_POST['txtnombrese'],
        $_POST['txtapellidose'],
        $_POST['txtemaile'],
        $_POST['txtdireccione'],
        $rutafinal,
        $_POST['txtnacimientoe'],
        $_POST['txtidpersonae']
    );
    echo $obj->editar($datos);
}
//Aca es cuando no se ingreso una imagen
else {
    $datos = array(
        $_POST['txtnombrese'],
        $_POST['txtapellidose'],
        $_POST['txtemaile'],
        $_POST['txtdireccione'],
        $_POST['txtruta'],
        $_POST['txtnacimientoe'],
        $_POST['txtidpersonae']
    );
   echo $obj->editar($datos);
}
}
?>
