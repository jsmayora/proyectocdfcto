<?php namespace modelo;
// 14.- PHP Orientado a Objetos - Creación de nuestros modelos
// y video 15.- PHP Orientado a Objetos - Configuración de Autoload

use conexion;

class seccion {

    // atributos
    private  $id;
    private  $nombre;
    private  $objConexion;

    //  Metodos

    // Constructor
    public function __construct()
    {
        //  Llamando a la clase conexion.php
        //  Instanciando la conexion
        $this->objConexion = new conexion();

    }
    // 14.- PHP Orientado a Objetos - Creación de nuestros modelos
    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }



    public function  lsitar(){
        $sql = "SELECT * FROM secciones ";
        $datos = $this->objConexion->consultaRetorno($sql);

        return $datos;


    }

    public function  add(){
        $sql = "INSERT INTO secciones (id, nombre) VALUES(null,'{$this->nombre}')";
        $datos = $this->objConexion->consultaSimple($sql);



    }
    public function  delete(){
        $sql = "DELETE FROM  secciones WHERE  id = '{$this->id}'";
        $datos = $this->objConexion->consultaSimple($sql);



    }

    public function  edit(){
        $sql = "UPDATE FROM  SET nombre = '{$this->nombre}' WHERE  id = '{$this->id}'";
        $datos = $this->objConexion->consultaSimple($sql);



    }


      public function  view(){
        $sql = "SELECT * FROM secciones WHERE id  = '{$this->id}'";
        $datos = $this->objConexion->consultaRetorno($datos);
        $fila= \mysqli_fetch_assoc($datos);
        return $fila;

    }

    //   public function  (){
    //     $sql = "";
    //     $datos = $this->objConexion->consultaSimple();

    //     return $datos;

    // }

}




?>