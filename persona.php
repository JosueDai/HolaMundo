<?php
class Persona{
    public $nombre='';
    public $edad= 18;

    function mostrarDatos(){
        echo '<hr>';
        echo "<br>Nombre de persona $this->nombre";
        echo "<br>Edad de persona $this->edad";
        echo '<br>';
    }


    function __construct(){
        $this->nombre = "Anonimo";
        $this->edad = 12;
    }
}