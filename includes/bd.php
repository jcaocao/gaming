<?php


class BaseDeDades
{
var $BaseDeDades;
var $Servidor;
var $Usuari;
var $Clau;
var $Conexio_ID = 0;
var $Consulta_ID = 0;

function BaseDeDades($bd = "gamingtorrents", $host = "localhost", $user = "adminGamer", $pass = "123123") 
{
$this->BaseDeDades = $bd;
$this->Servidor = $host;
$this->Usuari = $user;
$this->Clau = $pass;
$this->Conexio_ID = mysqli_connect($this->Servidor, $this->Usuari, $this->Clau);
mysqli_select_db( $this->Conexio_ID  , $this->BaseDeDades);
}

function consulta($sql = "")
{
$this->Consulta_ID = @mysqli_query( $this->Conexio_ID , $sql);
return $this->Consulta_ID;
}
function error()
{
return mysqli_error($this->Conexio_ID);
}

function numrows()
{
return mysqli_num_rows($this->Consulta_ID);
}

function fetch()
{
return mysqli_fetch_array($this->Consulta_ID);
}

function tanca()
{
return mysqli_close($this->Conexio_ID);
}
}

?>
