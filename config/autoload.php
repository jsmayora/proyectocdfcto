<?php namespace config;
// 14.- PHP Orientado a Objetos - Creación de nuestros modelos
// 15.- PHP Orientado a Objetos - Configuración de Autoload

class autoload{

    public static function run(){
        spl_autoload_register(function($clase){

            $ruta = str_replace("\\", "/",$clase) . ".php";
            // print $ruta;
            include_once $ruta;

        });
    }
}



?>
