<?php
class MySQL_Clase
{
 	 private $conexion;
     private $total_consultas;
	 var $servidor;
	 var $usuario;
	 var $password;
	 var $BaseD;

	function MySQL_Clase()
	{
		$this->servidor = "localhost";
		$this->usuario = "root";
		$this->password = "";
		$this->BaseD = "GESTISAC";
	}

	public function Conectar()
	{
		if(!isset($this->conexion))
		{
			$this->conexion = mysql_connect($this->servidor,$this->usuario,$this->password) or die(mysql_error());
			mysql_select_db($this->BaseD,$this->conexion) or die(mysql_error());
		}
	}

	public function Query($query)
	{
		$this->total_consultas++;
		$resultado = mysql_query($query,$this->conexion);
		if(!$resultado)
		{
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}
		return $resultado; 
	}

	public function fetch_row($consulta)
	{
		return mysql_fetch_row($consulta);
	}

	public function num_rows($consulta)
	{ 
	  return mysql_num_rows($consulta);
	}

	public function getTotalConsultas()
	{
	  return $this->total_consultas;
	}
	
	public function Desconectar()
	{
		@mysql_close($conexion);
	}
}
?>
