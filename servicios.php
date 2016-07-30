
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

	</head>
	<body>
<?php include("admin/clases.php"); ?>
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
<?php
$res = $obj_servicios->Extraer_ID($_GET["id"]);
$row = mysql_fetch_assoc($res);
?>
	<div id="slider" data-section="home">
		<div class="owl-carousel owl-carousel-fullwidth">
			<!-- You may change the background color here. -->
			<div class="item" style="background-image:url(admin/ARCHIVOS/SERVICIOS/<?php echo $row["IMAGEN"]; ?>)">
                <div class="overlay"></div>
                <div class="container" style="position: relative;">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead to-animate">Servicios</h1>
                                    <h2 class="fh5co-sub-lead to-animate">
										<?php echo $row["TITULO"]; ?>
                                    </h2>
                                    <p class="to-animate-2"><a href="#" data-nav-section="services" class="btn btn-primary btn-lg">Ver Servicio</a></p>
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

		
	<div id="fh5co-press" data-section="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="single-animate animate-press-1"><?php echo $row["TITULO"]; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<div class="row">
                    	<div class="col-lg-2 col-md-2"></div>
						<div class="col-lg-8 col-md-8 subtext single-animate animate-press-2">
							<h3 align="justify">
                            <?php echo $row["DESCRIPCION"]; ?> 
                            </h3>
						</div>
						<div class="col-lg-2 col-md-2"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<div class="row">
                    	<div class="col-lg-2 col-md-2"></div>
						<div class="col-lg-8 col-md-8 subtext single-animate animate-press-2">
							<img class="img-rounded" src="admin/ARCHIVOS/SERVICIOS/<?php echo $row["IMAGEN"]; ?>" width="100%" />
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
