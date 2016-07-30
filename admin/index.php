<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" type="image/png" href="icon.png" />
	<title>Administración GESTISAC</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include("clases.php"); ?>
<nav class="navbar navbar-dark bg-inverse">
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
  	&nbsp;
  </div>
</nav>
<br><br><br><br>

<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 col-xl-4 col-xl-offset-4">
	<img src="Logo.jpg" width="100%">
	<br><br>
<?php

///////////////////------------------------------------------------------------------------------------------------------------------------

	if(isset($_POST['salir_sesion']))
	{
		$usuario = $_SESSION['username'];
		session_destroy();
		echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=$PHP_SELF'>";
	}
	
	if(isset($_POST['usuarios']))
	{
		$usuario = $_POST['usuarios'];
		$clave = $_POST['clave'];
	
		$res = $obj_usuarios->Verificar_Logueo_Usuario($usuario, $clave);
	
		$usuario2 = "";
		$clave2 = "";
		$nombre = "";
		$apellido = "";
		$tipo = "";
	
		if($res)
		{
			$row = mysql_fetch_assoc($res);
			$usuario2 = strtolower($row["LOGIN"]);
			$clave2 = $row["PASSWORD"];
			$nombre = $row["NOMBRE"];
			$apellido = $row["APELLIDO"];
			$tipo = $row["TIPO"];
		}
	
		if($usuario2 == $usuario && $clave == $clave2 && $usuario != "" && $clave != "")
		{
				$_SESSION["autentificado"]= "SI";
				$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
				$_SESSION['username'] = $usuario;
				$_SESSION['nombre'] = $nombre;
				$_SESSION['apellido'] = $apellido;
				$_SESSION['tipo_usuario'] = $tipo;

				echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=inicio.php'>";
		}
		else
		{
			echo "<script>alert('USUARIO O CLAVE INCORRECTOS');</script>";
			echo @"<META HTTP-EQUIV='refresh' CONTENT='0; URL=index.php'>";
		}
	
	}
	
	if(isset($_SESSION['nombre']) && !isset($_POST['salir_sesion']))
	{
	?>
	<?php 
		$nombre = $_SESSION['nombre'];
		$apellido = $_SESSION['apellido'];
		$tipo_usuario = $_SESSION['tipo_usuario'];
	?>
	<?php 
	}
	?>

<form action="" method="post">
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Usuario:</label>
    <input type="text" class="form-control" name="usuarios" id="exampleInputEmail1" placeholder="Usuario">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="clave" id="exampleInputPassword1" placeholder="Contraseña">
  </fieldset>

  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
<script src="bootstrap/js/jquery-2.2.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>