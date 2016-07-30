<?php

class Servicios
{
	var $BD;
	
	function Servicios()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($imagen, $titulo, $descripcion)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO SERVICIOS(IMAGEN, TITULO, DESCRIPCION) VALUES('$imagen', '$titulo', '$descripcion')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, IMAGEN, TITULO, DESCRIPCION FROM SERVICIOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN, TITULO, DESCRIPCION FROM SERVICIOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM SERVICIOS WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>