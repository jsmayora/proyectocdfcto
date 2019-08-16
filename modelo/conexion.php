<?php namespace modelo;
// 14.- PHP Orientado a Objetos - Creación de nuestros modelos
use mysqli;

class conexion
{
//   Atributos
    private $datos = array(
        'host' => 'localhost',
        'user' => 'jmayora',
        'pass' => 'cda25-cd',
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
