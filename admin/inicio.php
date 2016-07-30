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

	if(document.getElementById("img_fondo").value == "")
	{
		acepto = false;
		alert("DEBE SELECCIONAR UNA IMAGEN");
	}
	
	if(document.getElementById("titulo").value == "")
	{
		acepto = false;
		alert("DEBE REGISTRAR UN TITULO");
	}

	if(document.getElementById("descripcion").value == "")
	{
		acepto = false;
		alert("DEBE REGISTRAR UNA DESCRIPCION");
	}

	if((document.getElementById("boton_texto").value == "" && document.getElementById("boton_enlace").value != "") || (document.getElementById("boton_texto").value != "" && document.getElementById("boton_enlace").value == ""))
	{
		acepto = false;
		alert("PARA REGISTRAR UN BOTÓN DEBE REGISTRAR TANTO EL TEXTO COMO EL ENLACE (con http:// o https://)");
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
      <li class="nav-item active" style="margin-right:20px">
        <a class="nav-link" href="inicio.php"><strong>Inicio</strong></a>
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

<h1><strong>Administrar Sección Inicio/Slider</strong></h1>

</div>
<div class="col-xl-2 col-lg-2 col-md-2"></div>

</div>

<br><br><br>
<?php
		if(isset($_FILES['img_fondo']['name']))
		if($_FILES['img_fondo']['name'])
		{
			//echo "Hay Archivo";
		 if (($_FILES["img_fondo"]["type"] == "image/jpeg")  || ($_FILES["img_fondo"]["type"] == "image/jpg") || ($_FILES["img_fondo"]["type"] == "image/JPG") || 
			 ($_FILES["img_fondo"]["type"] == "image/JPEG") || ($_FILES["img_fondo"]["type"] == "image/png") || ($_FILES["img_fondo"]["type"] == "image/PNG"))
			 {
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

					 while (file_exists("ARCHIVOS/INICIO/".$_FILES["img_fondo"]["name"]) && $_FILES["img_fondo"]["name"]) 
					 {
							 $extension = substr(strrchr($_FILES["img_fondo"]["name"], "."),1);
							 $_FILES["img_fondo"]["name"] = str_replace(".".$extension, "", $_FILES["img_fondo"]["name"]);
							 $_FILES["img_fondo"]["name"] = $_FILES["img_fondo"]["name"]."1.".$extension;
					 }

					 if($_FILES["img_fondo"]["name"])
					 {
						  move_uploaded_file($_FILES["img_fondo"]["tmp_name"], "ARCHIVOS/INICIO/" . $_FILES["img_fondo"]["name"]);
					 }
					 
					 if($obj_inicio->Registrar($_FILES["img_fondo"]["name"], $_POST["titulo"], $_POST["descripcion"], $_POST["boton_texto"], $_POST["boton_enlace"]))
					 {
?>
                        <div class="alert alert-success" role="alert">
                          Información Registrada con Éxito! <strong><a href="inicio.php">Salir</a></strong>
                        </div>
<?php
					 }
					 
			 }
		}
?>

<?php

if(isset($_POST['id_orden1']))
{
	$i = 1;
	while(isset($_POST['id_orden'.$i]))
	{
		$id_orden = $_POST['id_orden'.$i];
		$orden = $_POST['orden'.$id_orden];
		$obj_inicio->Ordenar($id_orden, $orden);
		$i++;
	}
	
	if($i > 1)
	{
?>
        <div class="alert alert-success" role="alert">
          Se ha ordenado el slider <strong><a href="inicio.php">Salir</a></strong>
        </div>
<?php 	
	}
}

if(isset($_POST["id_elim"]))
{
	$nombre = $obj_inicio->Extraer_ID($_POST["id_elim"]);
	$nombre = mysql_fetch_assoc($nombre);
	$nombre = $nombre["IMAGEN"];

	$obj_inicio->Eliminar($_POST["id_elim"]);
	unlink("ARCHIVOS/INICIO/$nombre");
?>
    <div class="alert alert-danger" role="alert">
      Se ha eliminado el Item del Slider <strong><a href="inicio.php">Salir</a></strong>
    </div>
<?php
}

if(isset($_GET['eliminar']))
{
?>
<div class="col-xl-1 col-lg-1 col-md-1"></div>

<div class="col-xl-10 col-lg-10 col-md-10">
<table class="table table-striped" width="100%" border="0">
  <tr>
    <td class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><strong>Imagen</strong>&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><strong>Titulo</strong>&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><strong>Eliminar</strong>?&nbsp;</td>
  </tr>
<?php
$res = $obj_inicio->Extraer();

while($row = mysql_fetch_assoc($res))
{
?>
  <tr>
    <td class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><img class="img-rounded" src="ARCHIVOS/INICIO/<?php echo $row["IMAGEN"]; ?>" width="100%" />&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><?php echo $row["TITULO"]; ?>&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <form action="" method="post" name="eliminar<?php echo $row["ID"]; ?>">
    <input type="hidden" name="id_elim" value="<?php echo $row["ID"]; ?>" />
    <input class="btn btn-danger" type="button" name="boton" value="Eliminar" onClick="if(confirm('Seguro desea Eliminar Este item?')){document.eliminar<?php echo $row["ID"]; ?>.submit();}" />
    </form>
    &nbsp;
    </td>
  </tr>
<?php
}
?>
</table>

</div>
<div class="col-xl-1 col-lg-1 col-md-1"></div>

<?php
}
else if(isset($_GET['ordenar']))
{
?>
<div class="col-xl-1 col-lg-1 col-md-1"></div>

<div class="col-xl-10 col-lg-10 col-md-10">
<h1>Seleccione el orden en el que desea que salgan las imágenes e información en el slider</h1>
<br>
<br>
<form action="" method="post" name="ordenar">

<table class="table table-striped" width="100%" border="0">
  <tr>
    <td class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><strong>Imagen</strong>&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><strong>Titulo</strong>&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><strong>Orden</strong>?&nbsp;</td>
  </tr>
<?php
$res = $obj_inicio->Extraer();
$g = 1;
while($row = mysql_fetch_assoc($res))
{
?>
  <tr>
    <td class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"><img class="img-rounded" src="ARCHIVOS/INICIO/<?php echo $row["IMAGEN"]; ?>" width="100%" />&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"><?php echo $row["TITULO"]; ?>&nbsp;</td>
    <td class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="form-group">
	<select class="form-control" name="orden<?php echo $row["ID"]; ?>">

    <?php

	for($i = 1; $i <= mysql_num_rows($res); $i++)
	{
	?>
	  <option <?php if($i == $row["ORDEN"]) echo "selected" ; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php
	}
	?>
    </select>
    <input type="hidden" name="id_orden<?php echo $g; ?>" value="<?php echo $row["ID"]; ?>" />
    </div>
    &nbsp;
    </td>
  </tr>
<?php
$g++;
}
?>
</table>
<br>
<br>
<br>
<input class="btn btn-warning" type="submit" name="boton" value="Ordenar Slider" />
</form>
</div>
<div class="col-xl-1 col-lg-1 col-md-1"></div>

<?php
}
else if(isset($_GET['registrar']))
{
?>
<div class="row">

<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
<form action="" method="post" enctype="multipart/form-data" name="registrar" id="registrar">
<div class="form-group">
<input type="file" name="img_fondo" id="img_fondo" placeholder="Seleccione Imagen..." /><br><br>
<input class="form-control-lg" type="text" name="titulo" id="titulo" placeholder="Título del Slider" /><br><br>
<textarea name="descripcion" rows="5" class="form-control-lg" id="descripcion" placeholder="Descripción del Slider"></textarea><br><br>
<input class="form-control-lg" type="text" name="boton_texto" id="boton_texto"  placeholder="Titulo del Botón" /><br><br>
<input class="form-control-lg" type="text" name="boton_enlace" id="boton_enlace" placeholder="Enlace del Botón" /><br><br>
<br>
<br>
<input class="btn btn-primary" type="button" value="Registrar Slider" onClick="Verificar()" />
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
<br>
<br>
<br>
<br>
<br>
<br>

</div>
<?php	
}
else
{
?>
<div class="row">
<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
<form action="" method="get">
<input type="hidden" name="registrar" />
<input class="btn btn-primary btn-lg" type="submit" value="Registrar" />
</form>
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
<form action="" method="get">
<input type="hidden" name="ordenar" />
<input class="btn btn-warning btn-lg" type="submit" value="Ordenar" />
</form>
</div>

<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
<form action="" method="get">
<input type="hidden" name="eliminar" />
<input class="btn btn-danger btn-lg" type="submit" value="Eliminar" />
</form>
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