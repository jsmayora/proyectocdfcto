<?php  namespace config;
// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador
class enrutador{

    public static function run(Request $request ){
    // Crear una verdadera ruta para buscar el archivo dentro de la carpeta
        $controlador = $request->getControlador() . "Controlador";
        $ruta = ROOT . "controlador" .DS. $controlador . ".php";
        // print $controlador;
        // print $ruta;
        $metodo = $request->getMetodo();
        if ($metodo == "index.php") {
            $metodo = "index";
        }
        $argumento = $request->getArgumento();
        if (is_readable($ruta)) {
            require_once $ruta;
            $mostrar = "Controlador\\".$controlador;
            $controlador = new $mostrar;
            if (!isset($argumento)) {
                call_user_func(array($controlador,$metodo));
            }else{
                call_user_func_array(array($controlador,$metodo),$argumento);
            }
        }

        //  Cargar vista
        $ruta = ROOT . "vista" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
        // print_r($ruta);
        if (is_readable($ruta)) {

            require_once ($ruta);
        } else {
            print "No se encontro la ruta";
        }

    }
}

?>
