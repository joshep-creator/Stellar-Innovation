<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Favicon-->
	<link rel=" icon" href="img/logo1.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Interlagos Sitio-Web</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img class="img-fluid" src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item "><a class="nav-link" href="index.php">Inicio</a></li>
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogo</a>
								<ul class="dropdown-menu">
									<li class="nav-item "><a class="nav-link" href="oficina.php">Oficina</a></li>
									<li class="nav-item"><a class="nav-link" href="escolar.php">Escolar</a></li>
									<li class="nav-item active"><a class="nav-link" href="farmacia.php">Farmacia</a></li>
									<li class="nav-item"><a class="nav-link" href="servicios.php">Otros Servicios</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="about_us.html">Acerca de nosotros</a></li>

							<li class="nav-item"><a class="nav-link" href="contact.html">Contáctanos</a></li>

							<li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesion</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Buscar Productos">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Farmacia</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Inicio<span class="lnr lnr-arrow-right"></span></a>
						<a href="">Catalogo/Farmacia</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<center>
				<div class="col-xl-9 col-lg-8 col-md-7">
					<!-- Start Best Seller -->
					<section class="lattest-product-area pb-40 category-list">
						<div class="row">

							<!--Listado con php de los productos-->
							<?php
							include("crud_sitio_web/db.php");
							$query = "SELECT * FROM productos WHERE categoria='Farmacia'";
							$resultado1 = mysqli_query($conn, $query);
							/* El código anterior es un bucle de PHP que obtiene datos de una base de datos MySQL y los muestra como una cuadrícula de productos en una
								página web. Recupera cada fila de datos de la variable  y la muestra en una única división de producto. El código también incluye la imagen del producto, el nombre, el precio y un enlace
								"Ver más". */
								$contador = 0;
							while ($row = mysqli_fetch_assoc($resultado1)) {
							?>
								<!-- single product -->
								<div class="col-lg-4 col-md-6">
									<div class="single-product">
										<img class="img-fluid" src="data:image/png;base64,<?php echo base64_encode($row['imagen_url']); ?>" style="height: 150px; width: auto;">
										<div class="product-details">
											<h6><?php echo $row["nombre"]; ?></h6>
											<div class="price">
												<!--Actual price-->
												<h6>$<?php echo $row["precio"]; ?> <strong>COP</strong></h6>
												<!--Before price-->
												<h6 class="l-through"></h6>
											</div>
											<button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
											<dialog id="miDialog<?php echo $contador; ?>">
												<?php echo $row["description"]; ?>
												<button id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
											</dialog>
											<script>
												// Obtener referencias a los elementos del DOM utilizando el identificador único
												const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
												const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
												const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

												// Agregar un controlador de eventos al botón para abrir la ventana emergente
												verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
													miDialog<?php echo $contador; ?>.showModal();
												});

												// Agregar un controlador de eventos al botón de cerrar la ventana emergente
												cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
													miDialog<?php echo $contador; ?>.close();
												});
											</script>
										</div>
									</div>
								</div>
							<?php
								$contador++;
							}
							?>
						</div>
					</section>
					<!-- End Best Seller -->
				</div>
		</div>
	</div>
	</center>


	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget align-self-start">
						<h6>Acerca de nosotros</h6>
						<p>
							Somos una empresa familiar que ha sido parte integral de la comunidad de Garagoa y hemos brindado productos de calidad y servicios confiables a nuestros clientes.
						</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 ml-auto">
					<div class="single-footer-widget align-self-start">
						<h6>Síguenos</h6>
						<p>Nuestras redes sociales</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://instagram.com/interlagosgaragoa_?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a>
							<a href="mailto:papeleriainterlagos@gmail.com?subject=Pregunta&body=Buenos%20d%C3%ADas..."><i class="fa fa-envelope"></i></a>
							<a href="http://wa.me/573143060264"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">Developed by CodeCraze <img src="img/logo2.png" style="max-height: 30px;">
				</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


	<!-- Modal Quick Product View -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="container relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="product-quick-view">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="quick-view-carousel">
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="quick-view-content">
								<div class="top">
									<h3 class="head">Mill Oil 1000W Heater, White</h3>
									<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
									<div class="category">Category: <span>Household</span></div>
									<div class="available">Availibility: <span>In Stock</span></div>
								</div>
								<div class="middle">
									<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
										looking for something that can make your interior look awesome, and at the same time give you the pleasant
										warm feeling during the winter.</p>
									<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
								</div>
								<div class="bottom">
									<div class="color-picker d-flex align-items-center">Color:
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
									</div>
									<div class="quantity-container d-flex align-items-center mt-15">
										Quantity:
										<input type="text" class="quantity-amount ml-15" value="1" />
										<div class="arrow-btn d-inline-flex flex-column">
											<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
											<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
										</div>

									</div>
									<div class="d-flex mt-20">
										<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a href="https://wa.me/573143060264" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i> </a>

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>