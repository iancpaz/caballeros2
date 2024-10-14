<?php
class Conectar{
public static function conexion(){
$conexion=new mysqli("localhost", "root", "", "caballeros_mesa_cuadrada");
$conexion->query("SET NAMES 'utf8'");
return $conexion;
}
}
?>