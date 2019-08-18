<?php require_once "config/autoload.php";
// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador
// Contiene el directorio separador
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) .DS);
 // echo ROOT; exit();

config\autoload::run();
new config\request();


?>

 <?php // require_once "config/autoload.php";
// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador
// define('DS', DIRECTORY_SEPARATOR);
// define('ROOT', realpath(dirname(__FILE__)) .DS);


// 15.- PHP Orientado a Objetos - Configuración de Autoload
    // llamando a la clase autocarga con namespace para que carge las clase
// config\autoload::run();

    // llamando al namespace que contiene la clase estudiantes
// $objEstudiante= new modelo\estudiante();
    // $objEstudiante->hola();
// $objEstudiante->set("id", 1);
// $datos = $objEstudiante->view();
// echo $datos['nombre'];

?>
