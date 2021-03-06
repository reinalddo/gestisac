
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GESTISAC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="GESTISAC" />
	<meta name="keywords" content="GESTISAC" />
	<meta name="author" content="GESTISAC" />


  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" type="image/png" href="admin/icon.png" />

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon2.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min2.css">
	<link rel="stylesheet" href="css/owl.theme.default.min2.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	
	1. pink.css
	2. blue.css
	3. turquoise.css
	4. orange.css
	5. lightblue.css
	6. brown.css
	7. green.css

	-->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<script>

function Enviar()
{
	var acepto = true;
	if(document.getElementById("nombre").value == "")
	{
		acepto = false;
		alert("NOMBRE OBLIGATORIO");
	}

	if(document.getElementById("empresa").value == "")
	{
		acepto = false;
		alert("EMPRESA OBLIGATORIA");
	}

	if(document.getElementById("correo").value == "")
	{
		acepto = false;
		alert("CORREO OBLIGATORIO");
	}

	if(document.getElementById("mensaje").value == "")
	{
		acepto = false;
		alert("DEBE ESCRIBIR UN MENSAJE");
	}

	if(acepto) document.correo.submit();
}

</script>

	</head>
	<body>
<?php 
include("admin/clases.php");

$res = $obj_contacto->Extraer();
$row = mysql_fetch_assoc($res);
?>

	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="index.php" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		          	<a class="navbar-brand" href="index.php" style="color:#CCC;">GESTISAC</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="index.php#slider"><span style="color:#CCC;">Inicio</span></a></li>
		            <li><a href="index.php#fh5co-press"><span style="color:#CCC;">Servicios</span></a></li>
		            <li><a href="index.php#fh5co-about-us"><span style="color:#CCC;">Sobre Nosotros</span></a></li>
		            <li><a href="contacto.php"><span style="color:#CCC;">Atención al Cliente</span></a></li>
<!--		            <li><a href="#" data-nav-section="testimonials"><span>Contacto</span></a></li>
		            <li><a href="#" data-nav-section="pricing"><span>Pricing</span></a></li>
		            <li><a href="#" data-nav-section="press"><span>Press</span></a></li>-->
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<div id="slider" data-section="home">
		<div class="owl-carousel owl-carousel-fullwidth">
			<!-- You may change the background color here. -->
			<div class="item" style="background-image:url(admin/ARCHIVOS/CONTACTO/<?php echo $row["IMAGEN"]; ?>)">
                <div class="overlay"></div>
                <div class="container" style="position: relative;">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead to-animate">CONTÁCTENOS</h1>
                                    <h2 class="fh5co-sub-lead to-animate">

                                    </h2>
                                    <p class="to-animate-2"><a href="#" data-nav-section="services" class="btn btn-primary btn-lg">Envíenos un Mensaje</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- You may change the background color here.  -->
		    <div class="item" style="background: #38569f;">
		    </div>
		</div>
	</div>
<?php
if(isset($_POST["nombre"]))
{
	$para     = $row["CORREO_CENTRAL"];
	$nombre   = $_POST["nombre"];
	$empresa  = $_POST["empresa"];
	$correo   = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$asunto   = $_POST["asunto"];
	$msj      = $_POST["mensaje"];
	
	$titulo   = 'CORREO USUARIO GESTISAC ('.$nombre.')';
	$mensaje  = '
<html>
<head>
<title>GESTISAC</title>
</head>
<body>
<table width="671" border="0">
  <tr><td><strong>'.$nombre.'</strong></td></tr>
  <tr><td><strong>'.$empresa.'</strong></td></tr>
  <tr><td><strong>'.$correo.'</strong></td></tr>
  <tr><td><strong>'.$telefono.'</strong></td></tr>
  <tr><td>&nbsp;</td></tr>
  <tr><td><strong>'.$asunto.'</strong></td></tr>
  <tr><td>&nbsp;</td></tr>
  <tr><td><strong>'.$msj.'</strong></td></tr>
</table>

</body>
</html>
';
		//$cabeceras = 'From: usuarios@medifin.com.mx';// clave correo: Wesdap01?
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: GESTISAC <From: '.$para.'>' . "\r\n";

		if(@mail($para, $titulo, $mensaje, $cabeceras))
		{
			echo "<script>alert('MENSAJE ENVIADO EXITOSAMENTE');</script>";
		}
		else
		{
			echo "<script>alert('NO SE PUDO ENVIAR EL MENSAJE, INTENTE DE NUEVO POR FAVOR');</script>";
		}
}
?>
		
	<div id="fh5co-press" data-section="services">
		<div class="container">

            <div class="row">
           	<div class="col-lg-2 col-md-2"></div>
			<div class="col-lg-8 col-md-8">
            <form action="" class="form-group-lg" name="correo" method="post">
            <div class="row">
            	<div class="col-lg-6">
	            	<input class="input-lg col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" id="nombre" name="nombre" placeholder="Nombre(*)">
	            </div>
	            <div class="col-lg-6">
	            	<input class="input-lg col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" id="empresa" name="empresa" placeholder="Empresa(*)">
            	</div>
            </div>
            <br><br>
            <div class="row">
           		<div class="col-lg-6">
            		<input class="input-lg col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" id="correo" name="correo" placeholder="Correo(*)">
            	</div>
            	<div class="col-lg-6">
            		<input class="input-lg col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" id="telefono" name="telefono" placeholder="Teléfono">
            	</div>
            </div>
            <br><br>
            <input class="input-lg col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" id="asunto" name="asunto" placeholder="Asunto">
            <br><br><br>
            <textarea name="mensaje" rows="10" class="input-lg col-lg-12 col-md-12 col-sm-12 col-xs-12" id="mensaje" placeholder="Tu Mensaje(*)"></textarea>
            <p>&nbsp;</p>
            <input name="boton" type="button" class="btn btn-info" value="Enviar" onClick="Enviar()">
            </form>
            </div>
           	<div class="col-lg-2 col-md-2"></div>
            </div>

			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<div class="row">
                    	<div class="col-lg-2 col-md-2"></div>
						<div class="col-lg-4 col-md-4 subtext single-animate animate-press-2">
							<h3 align="left">
                                <strong>Email Central:</strong> <?php echo $row["CORREO_CENTRAL"]; ?> <br>
                                <?php 
								if($row["CONTACTO1"])
								{
								?>
                                <strong><?php echo $row["CONTACTO1"]; ?>:</strong> <br>
                                <?php echo $row["CORREO1"]; ?><br>
                                <?php
									if($row["NUMERO1_C1"])
									{
								?>	
                                <strong>Cel: </strong><?php echo $row["NUMERO1_C1"]; ?><br>
                                <?php
									}
									if($row["NUMERO2_C1"])
									{
								?>	
                                <strong>Cel: </strong><?php echo $row["NUMERO2_C1"]; ?><br>
                                <?php
									}

								}
								?>
                            </h3>
						</div>

						<div class="col-lg-4 col-md-4 subtext single-animate animate-press-2">
							<h3 align="left">
                                <?php 
								if($row["CONTACTO2"])
								{
								?>
                                <strong><?php echo $row["CONTACTO2"]; ?>:</strong> <br>
                                <?php echo $row["CORREO2"]; ?><br>
                                <?php
									if($row["NUMERO1_C2"])
									{
								?>	
                                <strong>Cel: </strong><?php echo $row["NUMERO1_C2"]; ?><br>
                                <?php
									}
									if($row["NUMERO2_C2"])
									{
								?>	
                                <strong>Cel: </strong><?php echo $row["NUMERO2_C2"]; ?><br>
                                <?php
									}
								}
								?>
                            </h3>
						</div>
						<div class="col-lg-2 col-md-2"></div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<?php include("footer.php"); ?>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min2.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
