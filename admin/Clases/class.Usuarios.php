<?php

class Usuarios
{
	var $BD;
	
	function Usuarios()
	{
		$this->BD = new MySQL_Clase();	
	}

	function Registrar_Usuario($usuario, $nombre, $telefono)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO USUARIOS(LOGIN, PASSWORD, NOMBRE, APELLIDO, TIPO, TELEFONO)
				   VALUES('$usuario', '0', '$nombre', '0', 0, '$telefono')";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Registrar_Usuario_Normal($usuario, $passw, $nombre, $apellido, $tipo)
	{
		$this->BD->Conectar();
		$consulta="INSERT INTO USUARIOS(LOGIN, PASSWORD, NOMBRE, APELLIDO, TIPO)
				   VALUES('$usuario', '$passw', '$nombre', '$apellido', $tipo)";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Verificar_Logueo_Usuario($usuario, $clave)
	{
		$this->BD->Conectar();
		$usuario = strtolower($usuario);
		$consulta="SELECT NOMBRE, APELLIDO, LOGIN, PASSWORD, TIPO FROM USUARIOS WHERE LOGIN='$usuario' AND PASSWORD='$clave'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}

	function Verificar_Clave_Anterior($usuario, $clave)
	{
		$this->BD->Conectar();
		$usuario = strtolower($usuario);
		$consulta="SELECT PASSWORD FROM USUARIOS WHERE LOGIN='$usuario' AND PASSWORD='$clave'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		$res = mysql_fetch_assoc($res);
		$res = $res["PASSWORD"];

		$acepto = false;

		if($res == $clave)
			$acepto = true;

		return $acepto;
	}

	function Cambiar_Passw($usuario, $nueva)
	{
		$this->BD->Conectar();
		$usuario = strtolower($usuario);
		$consulta="UPDATE USUARIOS SET PASSWORD = '$nueva' WHERE LOGIN='$usuario'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();

		return $res;
	}


	function Extraer()
	{
		$this->BD->Conectar();
		$consulta="SELECT LOGIN, PASSWORD FROM USUARIOS";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
		
	}

}

?>