<!DOCTYPE html>
<html lang="es">
<head>
	<title>Informacion auto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
				<!-- Topbar -->
				<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
					Puedes llamar al numero: 556321788
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							"Creditos desde el 25% de enganche hasta 60 meses"
						</a>
					</div>
				</div>
			</div>
				

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
							</li>

							<li>
								<a href="sobrenosotros.html">Sobre Nosotros</a>
							</li>
							<li>
									<a href="financiamiento.html">Financiamiento</a>
								</li>
							<li>
								<a href="contacto.php">Contacto</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
							
							
						<a href="php/docs/usuario/login.php"><p><i class="fa fa-user-circle"  aria-hidden="true" style="font-size: 30px;"></i></p></i></a>

						
					</div>

				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="fixed-top">
					<div class="wrap-header-mobile ">
						<!-- Logo moblie -->		
						<div class="logo-mobile ">
							<a href="index.php"><img src="images/icons/logo.png" alt="IMG-LOGO"></a>
						</div>
			
			
						<!-- Button show menu -->
						<div class="btn-show-menu-mobile hamburger hamburger--squeeze ">
							<span class="hamburger-box ">
								<span class="hamburger-inner"></span>
							</span>
						</div>
					</div>
			
			
					<!-- Menu Mobile -->
					<div class="menu-mobile ">
						<ul class="topbar-mobile ">
							<li>
								<div class="left-top-bar">
									Puedes llamar al numero: 556321788
								</div>
							</li>

							<li>
								<div class="right-top-bar flex-w h-full">
									<a href="#" class="flex-c-m p-lr-10 trans-04">
									"Creditos desde el 25% de enganche hasta 60 meses"
									</a>

								</div>
							</li>
						</ul>	


			
						<ul class="main-menu-m">
							<li>
								<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
							</li>
			
			
							<li>
								<a href="sobrenosotros.html">Sobre Nosotros</a>
							</li>
							<li>
									<a href="financiamiento.html">Financiamiento</a>
								</li>
							<li>
								<a href="contacto.php">Contacto</a>
							</li>
							<li>
								<a href="php/docs/usuario/login.php">ADMIN</a>
							</li>
						</ul>
					</div>
			</div>

	</header>


	<?php
            
            include('php/docs/conexion/conexion.php');

			$id = $_GET['id'];
            $consulta_mysqli = "SELECT imguno, imgdos, imgtres FROM autos WHERE id ='$id' ";
            $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

           	
							if (isset ($_GET['id'])) {
							while($registro = mysqli_fetch_array($resultado_consulta_mysqli)) {
						$imagen1 = $registro["imguno"];
						$imagen2 = $registro["imgdos"];
						$imagen3 = $registro["imgtres"];


        ?>

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="php/docs/procesos/<?php echo $imagen1; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="php/docs/procesos/<?php echo $imagen1; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="php/docs/procesos/<?php echo $imagen1; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="php/docs/procesos/<?php echo $imagen2; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="php/docs/procesos/<?php echo $imagen2; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="php/docs/procesos/<?php echo $imagen2; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="php/docs/procesos/<?php echo $imagen3; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="php/docs/procesos/<?php echo $imagen3; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="php/docs/procesos/<?php echo $imagen3; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }} ?>		

					<?php
						
							

							$resultado = "SELECT modelo, precio, descripcion, combustible, cilindros, valvulas, alimentacion, aceleracion, velocidad, traccion, transmision, frenos, neumaticos, largo, ancho, alto, tanque FROM autos WHERE id = '$id'";
							$datos = mysqli_query($conexion, $resultado);
								
							if (isset ($_GET['id'])) {
								while($registro = mysqli_fetch_array($datos)) {
								 $modelo = $registro['modelo'];
								 $precio = $registro['precio'];
								 $descripcion = $registro['descripcion'];
								 //fichetec
								 $combustible = $registro['combustible'];
								 $cilindros = $registro['cilindros'];
								 $valvulas = $registro['valvulas'];
								 $alimentacion = $registro['alimentacion'];

								 $aceleracion = $registro['aceleracion'];
								 $velocidad = $registro['velocidad'];
								 $traccion = $registro['traccion'];

								 $transmision = $registro['transmision'];
								 $frenos = $registro['frenos'];
								 $neumaticos = $registro['neumaticos'];

								 $largo = $registro['largo'];
								 $ancho = $registro['ancho'];
								 $alto = $registro['alto'];
								 $tanque = $registro['tanque'];
					?>


				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl6 js-name-detail p-b-14">
						<?php echo $modelo; ?> 
						</h4>

						<span class="mtext-106 6">
						<!--Precio a cambiar-->	<?php echo "$".$precio; ?> 
						</span>

						<p class="stext-102 cl3 p-t-23">
								<?php echo $descripcion; ?> 
						</p>
						
						<!--  -->
						<div class="p-t-33">

								<a href="https://api.whatsapp.com/send?phone=+529931383926&amp;text=Hola!&nbsp;me&nbsp;interesa&nbsp;<?php echo $modelo?>" target="_blank">	<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Consultar <i class="fa fa-whatsapp" aria-hidden="true"></i>
									</button></a>
								</div>
							</div>	
						</div>

						
					</div>
				</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descripción</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Ficha Tecnica</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
								<?php echo $descripcion; ?> 
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
									<h4>Motor:</h4><br>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Tipo combustible:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $combustible; ?> 
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Cilindros:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $cilindros; ?> 
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Valvulas:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $valvulas; ?> 
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
											Alimentacion:
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $alimentacion; ?> 
											</span>
										</li>
										<h4>Performance</h4><br>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Aceleracion:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $aceleracion; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Velocidad maxima:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $velocidad; ?> 
											</span>
										</li>

											<h4>Transmision y chasis</h4><br>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Motor-traccion:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $traccion; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Trasmision:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $transmision; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Frenos:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $frenos; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Neumaticos:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $neumaticos; ?> 
											</span>
										</li>

										<h4>Medidas y capacidades</h4><br>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Largo:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $largo; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Ancho:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $ancho; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Alto:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $alto; ?> 
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Tanque:
											</span>

											<span class="stext-102 cl6 size-206">
											<?php echo $tanque; ?> 
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
						<?php } ?>
						<?php } ?>
	</section>

	<!--flotantes-->

	<a href="https://api.whatsapp.com/send?phone=[+52][556321788]" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

	<a href="tel:+529934253847" class="btn-flotante">
		<i class="fa fa-phone" aria-hidden="true"></i>
	</a>

		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Links Importantes
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Inicio
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Sobre Nosotros
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Contacto
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Informacion
					</h4>

					<p class="stext-107 cl7 size-201">
					Alguna duda? Estamos atentos a su llamada al telefono celular (+55) 55
					</p>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<!-- Logo desktop -->		
					<a href="index.html" class="logo">
						<img src="images/icons/logo.png" alt="IMG-LOGO">
					</a>
							<ul>
							
								<a href="www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true" class="footer-icons"></i></a>
								<a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true" class="footer-icons"></i></a>
								<a href="www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true" class="footer-icons"></i></a>
							
							</ul>

				</div>
			</div>

			<div class="p-t-40">

				<p class="stext-107 cl9 txt-center">
					
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Elaborado por <i class="fa fa-heart-o" aria-hidden="true"></i><a href="" target="_blank">ACLABS</a>


				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>