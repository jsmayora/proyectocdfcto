<?php namespace modelo;
// 14.- PHP Orientado a Objetos - Creación de nuestros modelos
// use conexion;

class estudiante
{
    // Atrbutos
    private $id;
    private $nombre;
    private $edad;
    private $promedio;
    private $imagen;
    private $id_seccion;
    private $fecha;
    private $objConexion;

    // Metodos

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


    public function listar()
    {
        $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes
                t1 INNER JOIN secciones t2 on t1.id_seccion = t2.id";

        $datos = $this->objConexion->consultaSimple($sql);

        return $datos;
    }

    public function add()
    {
        $sql = "INSERT INTO  estudiantes (id,nombre,edad,promedio,imagen, id_seccion,fecha)
                VALUES (null,'{$this->nombre}','{$this->edad}','{$this->promedio}',
        '{$this->imagen}','{$this->id_seccion}', NOW())";
        $this->objConexion->consultaSimple($sql);
    }

    public function delete()
    {
        $sql = "DELETE  FROM estudiantes WHERE id ='{$this->id}'";
        $this->objConexion->consultaSimple($sql);

    }

    public function edit()
    {
        $sql = "UPDATE estudiantes SET nombre='{$this->nombre}', edad='{$this->edad}',
                         promedio='{$this->promedio}', id_seccion='{$this->id_seccion}'
                WHERE id='{$this->id}'";
        $this->objConexion->consultaSimple($sql);
    }
    public function view()
    {
        $sql = "SELECT t1.*,t2.nombre as nombre_seccion FROM estudiantes
                    t1 INNER JOIN  secciones t2 ON t1.id_seccion = t2.id
                 WHERE t1.id='{$this->id}'";
        $datos = $this->objConexion->consultaRetorno($sql);
        $fila= \mysqli_fetch_assoc($datos);
        return $fila;
    }

     // Metodo para probar si funciona el namespace
      public function  hola(){
        echo "Hola";

    }
}
