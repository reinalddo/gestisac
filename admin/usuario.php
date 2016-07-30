<?php session_start(); ?>
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
<script>
function Verificar()
{
	var acepto = true;

	if(document.getElementById("password").value == "")
	{
		acepto = false;
		alert("DEBE REGISTRAR UN PASSWORD");
	}

	if(document.getElementById("rpassword").value == "")
	{
		acepto = false;
		alert("DEBE VERIFICAR EL PASSWORD");
	}

	if(document.getElementById("password").value != document.getElementById("rpassword").value)
	{
		acepto = false;
		alert("EL PASSWORD DEBE SER IGUAL EN LOS 2 CAMPOS PARA PODER REGISTRAR");
	}

	if(acepto) document.registrar.submit();
}
</script>

</head>
<body>
<?php include("clases.php"); ?>
<nav class="navbar navbar-dark bg-inverse">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <ul class="nav navbar-nav">
      <li class="nav-item" style="margin-right:20px">
        <a class="nav-link" href="inicio.php">Inicio</a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <li class="nav-item" style="margin-right:20px">
        <a class="nav-link" href="servicios.php">Servicios</a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <li class="nav-item" style="margin-right:20px">
        <a class="nav-link" href="nosotros.php">Sobre Nosotros</a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <li class="nav-item" style="margin-right:20px">
        <a class="nav-link" href="contacto.php">Atención al Cliente</a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <li class="nav-item" style="margin-right:20px">
        <a class="nav-link" href="footer.php">Footer</a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <li class="nav-item active" style="margin-right:20px">
        <a class="nav-link" href="usuario.php"><strong>Admin</strong></a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <div class="col-lg-offset-11">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Salir</a>
      </li>
    </div>
    </ul>
  </div>
</nav>
<div class="container">
<br><br><br><br><br>
<div class="row">

<div class="col-xl-3 col-lg-3 col-md-3"></div>
<div class="col-xl-6 col-lg-6 col-md-6">

<h1><strong>Administrar Usuario Master</strong></h1>

</div>
<div class="col-xl-3 col-lg-3 col-md-3"></div>

</div>

<br><br><br>

<?php
if(isset($_POST["usuario"]))
{
	 if($obj_usuarios->Cambiar_Passw($_POST["usuario"], $_POST["password"]))
	 {
?>
		<div class="alert alert-success" role="alert">
		  Información de Usuario Editada con Éxito! <strong><a href="usuario.php">Salir</a></strong>
		</div>
<?php
	 }
}

if(isset($_GET["editar"]))
{
	$res = $obj_usuarios->Extraer();
	$row = mysql_fetch_assoc($res);
?>
<div class="row">

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>

<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="registrar" id="registrar">
<div class="form-group">
<h1>Cambiar Password usuario Master</h1>
<br>
<br>
<strong>Usuario:</strong><br>
<input class="form-control-lg" type="text" name="usuario" id="usuario" readonly placeholder="Usuario..." value="<?php echo $row["LOGIN"]; ?>" /><br><br>
<strong>Password:</strong><br>
<input name="password" type="password" class="form-control-lg" id="password" placeholder="Password..." value="">
<br><br>
<strong>Repita Password:</strong><br>
<input name="rpassword" type="password" class="form-control-lg" id="rpassword" placeholder="Repita Password..." value="">
<br><br>
<br>
<br>
<input name="Botón" type="button" class="btn btn-warning" value="Editar Password" onClick="Verificar()" />
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</form>
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>

</div>
<?php
}
else
{
?>
<div class="row">
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
<form action="" method="get">
<input type="hidden" name="editar" />
<input class="btn btn-warning btn-lg" type="submit" value="Editar" />
</form>
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
</div>
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>

</div>
<?php
}
?>

</div>
<script src="bootstrap/js/jquery-2.2.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>