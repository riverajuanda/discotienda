<?php
include_once "basedatos.php";
//clase artista

class artista extends basedatos
{
    public $artistaID;
    public $nombre;
    public $nacionalidad;
    public function __construct($artistaID = 'NULL', $nombre = 'NULL', $nacionalidad = 'NULL')
    {
        $this->artistaID = $artistaID;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
    }
    //metodo get
    public function getartistaID()    {
        return $this->artistaID;
    }
    public function getNombre()    {
        return $this->nombre;
    }

    //public function getCodTransaccion()
    //{
    // return $this->cod_transaccion;
    //}
    //metodo set
    public function setartistaID($artistaID)    {
        $this->artistaID = $artistaID;
    }
    public function setNombre($nombre)    {
        $this->nombre = $nombre;
    }
    //public function setCodTransaccion($cod_transaccion)
    //{
    // $this->cod_transaccion = $cod_transaccion;
    //}
    public function insertar()    {
        $sql = sprintf(        "INSERT INTO artista (artistaID, nombre, nacionalidad) VALUES ('%s', '%s', '%s')",
            $this->artistaID,
            $this->nombre,
            $this->nacionalidad
        );
        $this->conectar();
        //echo $sql;
        $this->ejecutarSQL(sql: $sql);
        $this->desconectar();
    }
    public function listar()    {
        $sql = "select * FROM artista
 ORDER BY nombre ASC";
        $this->conectar();
        $this->ejecutarSQL(sql: $sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }
    public function consultar()    {
        $sql = sprintf(
            "SELECT * FROM artista
 WHERE artistaID
 = '%s'",
            $this->artistaID
        );
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res["nombre"];
        $this->nacionalidad = $res["nacionalidad"];
    }

    public function eliminar()    {
        $sql = sprintf("DELETE FROM artista WHERE artistaID = '%s'",$this->artistaID        );
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }
public function actualizar()
{
    $sql = sprintf(
        "UPDATE artista
 SET nombre = '%s', nacionalidad = '%s' WHERE artistaID
 = '%s'",
        $this->nombre,
        $this->nacionalidad,
        $this->artistaID
    );
    $this->conectar();
    $this->ejecutarSQL($sql);
    $this->desconectar();
}
}
