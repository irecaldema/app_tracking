<?php
class Controller {
    
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    /*public function clicked() {
    	$this->model->string = "Updated Data, thanks to MVC and PHP!";
    }*/
    
    public function crear() {
    	$this->model->posicion=new Posicion(40,40,"12:00");
    }
    
    public function mostrar() {
    	$this->model->posicion->mostrar();
    }
    
    public function formulario() {
        $usuario = $_POST['usuario'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        $hora = $_POST['hora'];
        $this->model->posicion=new Posicion($latitud,$longitud,$hora);
    }
}