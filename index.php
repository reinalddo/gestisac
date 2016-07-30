
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
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
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

	</head>
	<body>
<?php include("admin/clases.php"); ?>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		          	<a class="navbar-brand" href="index.php">GESTISAC</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="home"><span>Inicio</span></a></li>
		            <li><a href="#" data-nav-section="services"><span>Servicios</span></a></li>
		            <li><a href="#" data-nav-section="about"><span>Sobre Nosotros</span></a></li>
		            <li><a href="contacto.php"><span>Atención al Cliente</span></a></li>
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

<?php
$res = $obj_inicio->Extraer();
while($row = mysql_fetch_assoc($res))
{
?>
    <div class="item" style="background-image:url(admin/ARCHIVOS/INICIO/<?php echo $row["IMAGEN"]; ?>)">
        <div class="overlay"></div>
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="fh5co-owl-text-wrap">
                        <div class="fh5co-owl-text">
                            <h1 class="fh5co-lead to-animate"><?php echo $row["TITULO"]; ?></h1>
                            <h2 class="fh5co-sub-lead to-animate"><?php echo $row["DESCRIPCION"]; ?></h2>
                            <?php
								if($row["TITULO_BOTON"])
								{
							?>
                            <p class="to-animate-2"><a href="<?php echo $row["ENLACE_BOTON"]; ?>" target="new" class="btn btn-primary btn-lg"><?php echo $row["TITULO_BOTON"]; ?></a></p>
                            <?php
								}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

		</div>
	</div>
	
	
	<div id="fh5co-press" data-section="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1">Servicios</h2>
				</div>
			</div>


    <div class="row">
<?php
$res = $obj_servicios->Extraer();
$i = 0;

while($row = mysql_fetch_assoc($res))
{
	if($i%2==0)
	{
?>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <!-- Press Item -->
        <div class="fh5co-press-item to-animate">
            <div class="fh5co-press-img" style="background-image: url(admin/ARCHIVOS/SERVICIOS/<?php echo $row["IMAGEN"]; ?>)">
            </div>
            <div class="fh5co-press-text">
                <h3 class="h2 fh5co-press-title"><?php echo $row["TITULO"]; ?> <span class="fh5co-border"></span></h3>
                <p><?php echo substr($row["DESCRIPCION"],0, 120); ?></p>
                <p><a href="servicios.php?id=<?php echo $row["ID"]; ?>" class="btn btn-primary btn-sm">Ver Más...</a></p>
            </div>
        </div>
        <!-- Press Item -->
    </div>
<?php
	}
	else
	{
?>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <!-- Press Item -->
        <div class="fh5co-press-item to-animate">
            <div class="fh5co-press-img" style="background-image: url(admin/ARCHIVOS/SERVICIOS/<?php echo $row["IMAGEN"]; ?>)">
            </div>
            <div class="fh5co-press-text">
                <h3 class="h2 fh5co-press-title"><?php echo $row["TITULO"]; ?> <span class="fh5co-border"></span></h3>
                <p><?php echo substr($row["DESCRIPCION"],0, 120); ?></p>
                <p><a href="servicios.php?id=<?php echo $row["ID"]; ?>" class="btn btn-primary btn-sm">Ver Más...</a></p>
            </div>
        </div>
        <!-- Press Item -->
    </div>
<?php
	}
	$i++;
}
?>
    </div>


		</div>
	</div>

<?php
$res = $obj_nosotros->Extraer();
$row = mysql_fetch_assoc($res);
?>
<div id="fh5co-about-us" data-section="about">
		<div class="container">
			<div class="row row-bottom-padded-lg" id="about-us">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><?php echo $row["TITULO"]; ?></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 to-animate">
							<h3><?php echo $row["DESCRIPCION1"]; ?></h3>
						</div>
					</div>
				</div>
				<div class="col-md-8 to-animate">
					<img src="admin/ARCHIVOS/NOSOTROS/<?php echo $row["IMAGEN"]; ?>" class="img-responsive img-rounded" alt="Free HTML5 Template">
				</div>
				<div class="col-md-4 to-animate">
                <?php 
				if($row["MISION"])
				{
				?>
					<h2>Misión</h2>
					<p><?php echo $row["MISION"]; ?></p>
                    <br>
                <?php
				}
				if($row["VISION"])
				{
				?>
                    <h2>Visión</h2>
					<p><?php echo $row["VISION"]; ?></p>
				<?php
				}
                ?>
				</div>
			</div>


			<div class="row row-bottom-padded-lg" id="about-us">
				<div class="col-md-12 section-heading text-center to-animate">
					<?php echo $row["DESCRIPCION2"]; ?>
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
	<script src="js/owl.carousel.min.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
	$(function(){
		$('#colour-variations ul').styleSwitcher({
			defaultThemeId: 'theme-switch',
			hasPreview: false,
			cookie: {
	          	expires: 30,
	          	isManagingLoad: true
	      	}
		});	
		$('.option-toggle').click(function() {
			$('#colour-variations').toggleClass('sleep');
		});
	});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
