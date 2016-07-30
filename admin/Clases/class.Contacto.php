<?php

class Contacto
{
	var $BD;
	
	function Contacto()
	{
		$this->BD = new MySQL_Clase();	
	}
	
	function Extraer()
	{
		$this->BD->Conectar();
		$consulta = "SELECT IMAGEN, CORREO_CENTRAL, CONTACTO1, CORREO1, NUMERO1_C1, NUMERO2_C1, CONTACTO2, CORREO2, NUMERO1_C2, NUMERO2_C2 FROM CONTACTO";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

	function Editar($imagen, $correo_central, $contacto1, $correo1, $numero1_c1, $numero2_c1, $contacto2, $correo2, $numero1_c2, $numero2_c2)
	{
		$this->BD->Conectar();
		$consulta = "UPDATE CONTACTO SET IMAGEN = '$imagen', 
										 CORREO_CENTRAL = '$correo_central', 
										 CONTACTO1 = '$contacto1', 
										 CORREO1 = '$correo1', 
										 NUMERO1_C1 = '$numero1_c1', 
										 NUMERO2_C1 = '$numero2_c1', 
										 CONTACTO2 = '$contacto2', 
										 CORREO2 = '$correo2', 
										 NUMERO1_C2 = '$numero1_c2', 
										 NUMERO2_C2 = '$numero2_c2'";
		$res = $this->BD->Query($consulta) or die(mysql_error());
		$this->BD->Desconectar();
		
		return $res;
	}

}

?>