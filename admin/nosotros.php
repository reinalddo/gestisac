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


	if(document.getElementById("titulo").value == "")
	{
		acepto = false;
		alert("DEBE REGISTRAR UN TITULO");
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
      <li class="nav-item active" style="margin-right:20px">
        <a class="nav-link" href="nosotros.php"><strong>Sobre Nosotros</strong></a>
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

<h1><strong>Administrar Sección Sobre Nosotros</strong></h1>

</div>
<div class="col-xl-2 col-lg-2 col-md-2"></div>

</div>

<br><br><br>
<?php
	if(isset($_FILES['img_fondo']['name']))
	{
		$imagen = $_POST["img_old"];
		if($_FILES['img_fondo']['name'])
		{
			//echo "Hay Archivo";
		 if (($_FILES["img_fondo"]["type"] == "image/jpeg")  || ($_FILES["img_fondo"]["type"] == "image/jpg") || ($_FILES["img_fondo"]["type"] == "image/JPG") || 
			 ($_FILES["img_fondo"]["type"] == "image/JPEG") || ($_FILES["img_fondo"]["type"] == "image/png") || ($_FILES["img_fondo"]["type"] == "image/PNG"))
			 {
				 $imagen = $_FILES['img_fondo']['name'];
					 $_FILES["img_fondo"]["name"] = str_replace("á", "a", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("é", "e", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("í", "i", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ó", "o", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ú", "u", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ä", "a", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ë", "e", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ï", "i", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ö", "o", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("ü", "u", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Á", "A", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("É", "E", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Í", "I", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ó", "O", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ú", "U", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ä", "A", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ë", "E", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ï", "I", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ö", "O", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("Ü", "U", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("¨", "", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("´", "", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace("`", "", $_FILES["img_fondo"]["name"]);
					 $_FILES["img_fondo"]["name"] = str_replace(" ", "", $_FILES["img_fondo"]["name"]);

					 while (file_exists("ARCHIVOS/NOSOTROS/".$_FILES["img_fondo"]["name"]) && $_FILES["img_fondo"]["name"]) 
					 {
							 $extension = substr(strrchr($_FILES["img_fondo"]["name"], "."),1);
							 $_FILES["img_fondo"]["name"] = str_replace(".".$extension, "", $_FILES["img_fondo"]["name"]);
							 $_FILES["img_fondo"]["name"] = $_FILES["img_fondo"]["name"]."1.".$extension;
					 }

					 if($_FILES["img_fondo"]["name"])
					 {
						  $nombre = $_POST["img_old"];
						  unlink("ARCHIVOS/NOSOTROS/$nombre");
						  move_uploaded_file($_FILES["img_fondo"]["tmp_name"], "ARCHIVOS/NOSOTROS/" . $_FILES["img_fondo"]["name"]);
					 }
			 }
		}
					 if($obj_nosotros->Editar($imagen, $_POST["titulo"], $_POST["descripcion1"], $_POST["mision"], $_POST["vision"], $_POST["descripcion2"]))
					 {
?>
                        <div class="alert alert-success" role="alert">
                          Información Editada con Éxito! <strong><a href="nosotros.php">Salir</a></strong>
                        </div>
<?php
					 }
	}



if(isset($_GET["editar"]))
{
	$res = $obj_nosotros->Extraer();
	$row = mysql_fetch_assoc($res);
?>
<div class="row">

<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="registrar" id="registrar">
<div class="form-group">
<input type="hidden" name="img_old" value="<?php echo $row["IMAGEN"]; ?>" />
<img class="img-rounded" src="ARCHIVOS/NOSOTROS/<?php echo $row["IMAGEN"]; ?>" width="100%" />
<strong>Seleccione Imagen:</strong><br>
<input type="file" name="img_fondo" id="img_fondo" placeholder="Seleccione Imagen..." /><br><br>
<strong>Título:</strong><br>
<input class="form-control-lg" type="text" name="titulo" id="titulo" placeholder="Título..." value="<?php echo $row["TITULO"]; ?>" /><br><br>
<strong>Descripción Corta:</strong><br>
<textarea name="descripcion1" rows="5" class="form-control-lg" id="descripcion1" placeholder="Descripción Corta..."><?php echo $row["DESCRIPCION1"]; ?></textarea><br><br>
<strong>Mision:</strong><br>
<textarea name="mision" rows="5" class="form-control-lg" id="mision" placeholder="Misión..."><?php echo $row["MISION"]; ?></textarea><br><br>
<strong>Visión:</strong><br>
<textarea name="vision" rows="5" class="form-control-lg" id="vision" placeholder="Visión..."><?php echo $row["VISION"]; ?></textarea><br><br>
<strong>Descripción:</strong><br>
<textarea name="descripcion2" rows="5" class="form-control-lg" id="descripcion2" placeholder="Descripción..."><?php echo $row["DESCRIPCION2"]; ?></textarea><br><br>
<br>
<br>
<input class="btn btn-warning" type="button" value="Editar" onClick="Verificar()" />
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

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
<form action="" method="get">
<input type="hidden" name="editar" />
<input class="btn btn-warning btn-lg" type="submit" value="Editar" />
</form>
</div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>

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