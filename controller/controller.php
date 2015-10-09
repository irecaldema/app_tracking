<?php
class Controller {
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    /*public function clicked() {
    	$this->model->string = "Updated Data, thanks to MVC and PHP!";
    }*/
    
    public function mostrar_posiciones() {
    	$this->model->buscar_posiciones();
    }
    
    public function formulario() {
        if ($_POST['crear']){
            session_start();
            $id_usuario = $_SESSION['id_usuario'];
            $latitud = $_POST['latitud'];
            $longitud = $_POST['longitud'];
            $this->model->insertarPosicion($id_usuario,$latitud,$longitud);
        }

    }
    
    public function login() {
        if ($_POST['login']){
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            //$this->model->insertarPosicion($latitud,$longitud);
            $this->model->buscarUsuario($usuario, $pass);
        }
    }
    
    public function register(){
        if ($_POST['register']){
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            $pass2 = $_POST['pass2'];
            if($pass == $pass2){
                $this->model->registrarUsuario($usuario, $pass);
            }
        }
    }
    
    public function destructorSesion(){
        //vaciar la sesion
        session_start();
        session_destroy();
        header("location:index.php");
    }
}