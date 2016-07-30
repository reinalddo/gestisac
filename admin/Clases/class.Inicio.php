<?php

class Inicio
{
	var $BD;
	
	function Inicio()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Registrar($imagen, $titulo, $descripcion, $titulo_boton, $enlace_boton)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO INICIO(IMAGEN, TITULO, DESCRIPCION, TITULO_BOTON, ENLACE_BOTON) VALUES('$imagen', '$titulo', '$descripcion', '$titulo_boton', '$enlace_boton')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT ID, IMAGEN, TITULO, DESCRIPCION, TITULO_BOTON, ENLACE_BOTON, ORDEN FROM INICIO ORDER BY ORDEN";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Extraer_ID($id)
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN, TITULO, DESCRIPCION, TITULO_BOTON, ENLACE_BOTON FROM INICIO WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Ordenar($id, $orden)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE INICIO SET ORDEN = $orden WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Eliminar($id)
	{
		$this->BD->Conectar();
		$consulta = "DELETE FROM INICIO WHERE ID = $id";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>