<?php

class Nosotros
{
	var $BD;
	
	function Nosotros()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN, TITULO, DESCRIPCION1, MISION, VISION, DESCRIPCION2 FROM NOSOTROS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($imagen, $titulo, $descripcion1, $mision, $vision, $descripcion2)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE NOSOTROS SET IMAGEN = '$imagen', 
										 TITULO = '$titulo', 
										 DESCRIPCION1 = '$descripcion1', 
										 MISION = '$mision', 
										 VISION = '$vision', 
										 DESCRIPCION2 = '$descripcion2'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>