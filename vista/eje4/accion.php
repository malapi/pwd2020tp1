<?php
include_once("../../configuracion.php");
$datos = data_submitted();
$obj = new control_eje4();
//$obj->verInformacion($datos);
//$obj->verInformacion($_POST);
//$obj->verInformacion($_GET);
$obj->verificarEdad($_GET);


?>