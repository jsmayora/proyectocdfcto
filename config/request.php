<?php namespace config;

// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador

class request{
    private $controlador;
    private $metodo;
    private $argumento;



    public function __construct(){
        // echo "hola mundo";
        if (isset($_GET['url'])) {
            echo $_GET['url'];
            // $ruta = filter_input(INPUT_GET,'url', FILTER_SANITIZE_URL);
            //  // print_r($ruta);exit();
            // $ruta = explode("/", $ruta);
            // $ruta = array_filter($ruta);
            // print_r($ruta);
        }else {
            echo "No entro";
        }


    }
}


?>