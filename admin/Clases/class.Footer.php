<?php

class Footer
{
	var $BD;
	
	function Footer()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT DERECHOS, TWITTER, FACEBOOK, YOUTUBE, PINTEREST, LINKEDIN, INSTAGRAM, DRIBBBLE FROM FOOTER";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($derechos, $twitter, $facebook, $youtube, $pinterest, $linkedin, $instagram, $dribbble)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE FOOTER SET DERECHOS = '$derechos', 
									   TWITTER = '$twitter', 
									   FACEBOOK = '$facebook', 
									   YOUTUBE = '$youtube', 
									   PINTEREST = '$pinterest', 
									   LINKEDIN = '$linkedin', 
									   INSTAGRAM = '$instagram', 
									   DRIBBBLE = '$dribbble'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>