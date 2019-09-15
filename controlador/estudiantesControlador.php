<?php  namespace controlador;

use modelo\estudiante as estudiante;

class  estudiantesControlador{

    private $estudiante;

    public function __construct(){
        $this->estudiante = new estudiante();

    }


    public function index(){
        // print "Hola soy el index del estudiante ";

        $datos =  $this->estudiante->listar();
        return $datos;
    }

}

$estudiantes = new estudiantesControlador();
?>
