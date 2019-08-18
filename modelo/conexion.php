<?php namespace modelo;
// 14.- PHP Orientado a Objetos - Creación de nuestros modelos
// use mysqli;

class conexion
{
//   Atributos
    private $datos = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => 'cltch2984',
        'db' => 'proyecto',
    );

    private $conexion;

//  Metodos

//  Creando el constructor de la clase
    public function __construct()
    {
        $this->conexion = new \mysqli(
            $this->datos['host'],
            $this->datos['user'],
            $this->datos['pass'],
            $this->datos['db']
        );

        // var_dump($this->conexion); exit();
    }

    public function consultaSimple($sql)
    {
        $this->conexion->query($sql);

    }

    public function consultaRetorno($sql)
    {
        $datos = $this->conexion->query($sql);
        return $datos;
    }
}
