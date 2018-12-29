<?php
class Conexion{
    

    public static function conectado()
    {
        try
        {
        $ccn = mysqli_connect('localhost', 'root', '1234', 'datatablephp');
        return $ccn;
        }catch (Exception $e)
        {
        die($e->getMessage());
        }
        
    }
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
}
