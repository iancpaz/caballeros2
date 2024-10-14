<?php
class armas_modelo{
private $db;
private $armas;
public function __construct(){
$this->db=Conectar::conexion();
$this->armas=array();
}
public function get_armas(){
$consulta=$this->db->query("select * from arma;");

while($filas=$consulta->fetch_assoc()){
$this->armas[]=$filas;

}
return $this->armas;
}
}
?>