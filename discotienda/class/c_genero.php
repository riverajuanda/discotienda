<?php
include_once "basedatos.php";
//clase artista

class artista extends basedatos
{
    public $generoID;
    public $nombre;
    //public $nacionalidad;
    public function __construct($generoID
 = 'NULL', $nombre = 'NULL')
    {
        $this->generoID
 = $generoID
;
        $this->nombre = $nombre;
       // $this->nacionalidad = $nacionalidad;
    }
    //metodo get
    public function getgeneroID()    {
        return $this->generoID
;
    }
    public function getNombre()    {
        return $this->nombre;
    }

    //public function getCodTransaccion()
    //{
    // return $this->cod_transaccion;
    //}
    //metodo set
    public function setargeneroID
($generoID
)    {
        $this->generoID
 = $generoID
;
    }
    public function setNombre($nombre)    {
        $this->nombre = $nombre;
    }
    //public function setCodTransaccion($cod_transaccion)
    //{
    // $this->cod_transaccion = $cod_transaccion;
    //}
    public function insertar()    {
        $sql = sprintf(        "INSERT INTO genero (generoID, nombre) VALUES ('%s', '%s')",
            $this->generoID
,
            $this->nombre,
            //$this->nacionalidad
        );
        $this->conectar();
        //echo $sql;
        $this->ejecutarSQL(sql: $sql);
        $this->desconectar();
    }
    public function listar()    {    $sql = "select * FROM artista ORDER BY nombre ASC";
        $this->conectar();
        $this->ejecutarSQL(sql: $sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }
    public function consultar()    {        $sql = sprintf(            "SELECT * FROM genero WHERE generoID = '%s'", $this->generoID);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res["nombre"];
        $this->generoID = $res["genero"];
    }

    public function eliminar()    {
        $sql = sprintf("DELETE FROM genero WHERE generoID = '%s'",$this->generoID
        );
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
public function actualizar(){    $sql = sprintf(        "UPDATE genero SET nombre = '%s' WHERE generoID = '%s'", $this->nombre, $this->generoID);
    $this->conectar();
    $this->ejecutarSQL($sql);
    $this->desconectar();
}
}
