<?php
include_once("posicion.php");
class Model {
    public $string;
    public $posicion;
    
    public function __construct() {
        $this->string = "MVC + PHP = Awesome!";
        $this->posicion=new Posicion(40,40,12:00);
    }
}