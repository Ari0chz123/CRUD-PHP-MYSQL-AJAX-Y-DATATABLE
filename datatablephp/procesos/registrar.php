<?php
require_once '../clases/Conexion.php';
require_once '../clases/Persona.php';
//obtener el nombre de la imagenes
$nombreimg = $_FILES['txtfile']['name'];
//ruta actual
$rutaactual = $_FILES['txtfile']['tmp_name'];
//rutafinal
$carpeta = "../imagenes/";
$sinfoto = "../imagenes/sinfoto.png";
$rutafinal = $carpeta.$nombreimg;
$obj = new Persona();

if(empty($_POST['txtnombres']) or empty($_POST['txtapellidos']) or empty($_POST['txtemail']) or empty($_POST['txtdireccion']) or empty($_POST['txtnacimiento']))
{
    echo "v";
}
else
{

//Aca es cuando se ingreso una imagen
if(move_uploaded_file($rutaactual,$rutafinal))
{
        $datos = array(
        $_POST['txtnombres'],
        $_POST['txtapellidos'],
        $_POST['txtemail'],
        $_POST['txtdireccion'],
        $rutafinal,
        $_POST['txtnacimiento']
    );
   echo $obj->registrar($datos);
}
//Aca es cuando no se ingreso una imagen
else {
    $datos = array(
        $_POST['txtnombres'],
        $_POST['txtapellidos'],
        $_POST['txtemail'],
        $_POST['txtdireccion'],
        $sinfoto,
        $_POST['txtnacimiento']
    );
   echo $obj->registrar($datos);
}
}



?>
