<?php
//Llamada al modelo
require_once("modelo/armas_modelo.php");
$arma=new armas_modelo();
$datos=$arma->get_armas();
//Llamada a la vista
require_once("vistas/armas_vista1.php");
?>