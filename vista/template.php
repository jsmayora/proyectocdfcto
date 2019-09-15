<?php namespace vista;

$template = new template();
// 17.- PHP Orientado a Objetos - Renderizar vistas & Clase plantilla

class template{
    public function __construct(){
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title></title>
            <link rel="stylesheet" href="<?php echo URL; ?>vista/template/css/bootstrap.css">
        </head>
        <body>


            <?php
        }


        public function __destruct(){
            ?>
        </body>
        </html>

        <?php
    }
}


?>
