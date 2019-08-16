<?php namespace modelo;
// 14.- PHP Orientado a Objetos - Creación de nuestros modelos
use conexion;

class estudiante
{
    // Atrbutos
    private $id_estudiante;
    private $nombre_estudiante;
    private $edad_estudiante;
    private $promedio_estudiante;
    private $imagen_estudiante;
    private $id_seccion;
    private $fecha_registro;
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
        $sql = "SELECT t1.*, t2.nombre_seccion as nombre_d_seccion FROM tbl_estudiantes
                t1 INNER JOIN tbl_secciones t2 on t1.id_seccion = t2.id_seccion";

        $datos = $this->objConexion->consultaSimple($sql);

        return $datos;
    }

    public function add()
    {
        $sql = "INSERT INTO  tbl_estudiantes (id_estudiante,nombre_estudiante,edad_estudiante,promedio_estudiante,imagen_estudiante,
        id_seccion,fecha_registro)
                VALUES (null,'{$this->nombre_estudiante}','{$this->edad_estudiante}','{$this->promedio_estudiante}',
                '{$this->imagen_estudiante}','{$this->id_seccion}', NOW())";
        $this->objConexion->consultaSimple($sql);
    }

    public function delete()
    {
        $sql = "DELETE  FROM tbl_estudiantes WHERE id_estudiante ='{$this->id_estudiante}'";
        $this->objConexion->consultaSimple($sql);

    }

    public function edit()
    {
        $sql = "UPDATE  FROM tbl_estudiantes SET nombre_estudiante='{$this->nombre_estudiante}', edad_estudiante='{$this->edad_estudiante}',
                promedio_estudiante='{$this->promedio_estudiante}', id_seccion='{$this->id_seccion}' WHERE id_estudiante='{$this->id_estudiante}'";
        $this->objConexion->consultaSimple($sql);
    }
    public function view()
    {
        $sql = "SELECT t1.*,t2.nombre_seccion as nombre_d_seccion FROM tbl_estudiantes 
        t1 INNER JOIN  tbl_secciones t2 ON t1.id_seccion = t2.id_seccion WHERE t1.id_seccion='{$this->id_seccion}'";
        $datos = $this->objConexion->consultaRetorno($sql);
        $fila= \mysqli_fetch_assoc($datos);
        return $fila;
    }
}
