<?php namespace config;

// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador

 // esto funciona en windows
// Hay que probrar en linux
class request{
    private $controlador;
    private $metodo;
    private $argumento;



    public function __construct(){
        // echo "hola mundo";
        if (isset($_GET['url'])) {
            // echo $_GET['url'];
            $ruta = filter_input(INPUT_GET,'url', FILTER_SANITIZE_URL);
             // print_r($ruta);exit();
            $ruta = explode("/", $ruta);
            $ruta = array_filter($ruta);
            // print_r($ruta);

            // Definir el controlador y el modelo
            if ($ruta[0] == "index.php") {
                $this->controlador = "estudiantes";
            }else{
                $this->controlador = strtolower(array_shift($ruta));
            }
            $this->metodo = strtolower(array_shift($ruta));
            // Calgar un metodo por defecto
            if (!$this->metodo) {
                $this->metodo = "index";
            }

            $this->argumento = $ruta;

        }
        else {
            $this->controlador ="estudiantes";
            $this->metodo = "index";

        }



    }


    // Metodos para el archivo controlador
    public function getControlador(){
        return $this->controlador;
    }

    public function getMetodo(){
        return $this->metodo;
    }

    public function getArgumento(){
        return $this->argumento;
    }
}

?>
