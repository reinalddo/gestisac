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
      <li class="nav-item active" style="margin-right:20px">
        <a class="nav-link" href="footer.php"><strong>Footer</strong></a>
      </li>
      <div class="hidden-sm-up"><br><br></div>
      <li class="nav-item" style="margin-right:20px">
        <a class="nav-link" href="usuario.php">Admin</a>
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

<div class="col-xl-2 col-lg-2 col-md-2"></div>
<div class="col-xl-8 col-lg-8 col-md-8">

<h1><strong>Administrar Sección Pie de Página</strong></h1>

</div>
<div class="col-xl-2 col-lg-2 col-md-2"></div>

</div>

<br><br><br>

<?php
if(isset($_POST["derechos"]))
{
	 if($obj_footer->Editar($_POST["derechos"], $_POST["twitter"], $_POST["facebook"], $_POST["youtube"], $_POST["pinterest"], $_POST["linkedin"], $_POST["instagram"], $_POST["dribbble"]))
	 {
?>
		<div class="alert alert-success" role="alert">
		  Información de Pie de Página Editada con Éxito! <strong><a href="footer.php">Salir</a></strong>
		</div>
<?php
	 }
}

if(isset($_GET["editar"]))
{
	$res = $obj_footer->Extraer();
	$row = mysql_fetch_assoc($res);
?>
<div class="row">

<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="registrar" id="registrar">
<div class="form-group">

<strong>Copyright:</strong><br>
<input class="form-control-lg" type="text" name="derechos" id="derechos" placeholder="Copyright..." value="<?php echo $row["DERECHOS"]; ?>" /><br><br>
<strong>Twitter:</strong><br>
<input name="twitter" type="text" class="form-control-lg" id="twitter" placeholder="Twitter..." value="<?php echo $row["TWITTER"]; ?>">
<br><br>
<strong>Facebook:</strong><br>
<input name="facebook" type="text" class="form-control-lg" id="facebook" placeholder="Facebook..." value="<?php echo $row["FACEBOOK"]; ?>">
<br><br>
<strong>Youtube:</strong><br>
<input name="youtube" type="text" class="form-control-lg" id="youtube" placeholder="Youtube..." value="<?php echo $row["YOUTUBE"]; ?>">
<br><br>
<strong>Pinterest:</strong><br>
<input name="pinterest" type="text" class="form-control-lg" id="pinterest" placeholder="Pinterest..." value="<?php echo $row["PINTEREST"]; ?>">
<br><br>
<strong>Linkedin:</strong><br>
<input name="linkedin" type="text" class="form-control-lg" id="linkedin" placeholder="Linkedin..." value="<?php echo $row["LINKEDIN"]; ?>">
<br><br>
<strong>Instagram:</strong><br>
<input name="instagram" type="text" class="form-control-lg" id="instagram" placeholder="Instagram..." value="<?php echo $row["INSTAGRAM"]; ?>">
<br><br>
<strong>Dribbble:</strong><br>
<input name="dribbble" type="text" class="form-control-lg" id="dribbble" placeholder="Dribbble..." value="<?php echo $row["DRIBBBLE"]; ?>">
<br>
<br>
<input name="Enviar" type="submit" class="btn btn-warning" value="Editar" />
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</form>
</div>

<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>

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