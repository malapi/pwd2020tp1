<?php 
$Titulo = " Ejercicio 4"; 
include_once("../estructura/cabecera.php");
?>
<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;" >
<?php 
$datos = data_submitted();
$obj = new control_eje3();
$obj->verInformacion($datos);
//$obj->verInformacion($_POST);
//$obj->verInformacion($_GET);



?>


<p>
<b>Respuesta: </b> 
<?php echo $respuesta ?>
</p>

</div>


</body>
<?php 

include_once("../estructura/pie.php");
?>
