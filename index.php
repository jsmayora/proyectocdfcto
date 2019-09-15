 <?php require_once "config/autoload.php";
// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador
// Contiene el directorio separador
// define('DS', DIRECTORY_SEPARATOR);
// define('ROOT', realpath(dirname(__FILE__)) .DS);
 // echo ROOT; exit();

// config\autoload::run();
// new config\request();


 ?>

 <?php
// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador
 define('DS', DIRECTORY_SEPARATOR);
 define('ROOT', realpath(dirname(__FILE__)) .DS);
// 17.- PHP Orientado a Objetos - Renderizar vistas & Clase plantilla
 // define('URL', 'http://localhost/proyectocdfcto/'); con figuracion en linux
 define('URL', 'http://localhost/html/proyectocdfcto/'); // configuracion en windows

// 15.- PHP Orientado a Objetos - Configuración de Autoload
    // llamando a la clase autocarga con namespace para que carge las clase
// 16.- PHP Orientado a Objetos - Creación de Request & Enrutador
 require_once "config/autoload.php";
 config\autoload::run();
// new config\request();
// 17.- PHP Orientado a Objetos - Renderizar vistas & Clase plantilla
 require_once "vista/template.php";
 config\enrutador::run(new config\Request());

    // llamando al namespace que contiene la clase estudiantes
// $objEstudiante= new modelo\estudiante();
// $objEstudiante->hola();
// $objEstudiante->set("id", 1);
// $datos = $objEstudiante->view();
// echo $datos['nombre'];




 ?>
