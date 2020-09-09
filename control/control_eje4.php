<?php

class control_eje4  {

    public function verInformacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        echo "Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." y vivo en ".$direccion;
     // print_r($datos);

    }

    public function verificarEdad($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        if ($edad >=18)
                echo "Hola yo soy ".$nombre.", ".$apellido." y soy mayor de edad;";
        else
                echo "Hola yo soy ".$nombre.", ".$apellido." y NO soy mayor de edad;";
     // print_r($datos);

    }

}
?>