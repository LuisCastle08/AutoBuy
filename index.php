<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
<body class="animsition" style="opacity:1 !important;">
	
	<!-- Header -->
		<!-- Header -->
		<header>
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
				
	
				<div class="wrap-menu-desktop">
					<nav class="limiter-menu-desktop container">
						
						<!-- Logo desktop -->		
						<a href="index.php" class="logo">
							<img src="images/icons/logo.png" alt="IMG-LOGO">
						</a>
	
						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li class="active-menu">
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
			$consulta_texto_slide = "SELECT * FROM slides WHERE id='1' ";
			$resultado_consulta = mysqli_query($conexion, $consulta_texto_slide);

			while($registro = mysqli_fetch_array($resultado_consulta)){
			$texto1 = $registro["texto1"];
			$subtexto1 =$registro["subtexto1"];
			$textboton=$registro["boton"];
			$imagen=$registro["imagen"];
			
		?>

				

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1">
					<div style="background-image: url(php/docs/procesos/<?php echo $imagen; ?>);	height: calc(100vh - 40px); background-size: cover; background-position: center center;  background-repeat: no-repeat; ">
					
							<div class="container h-full">
								<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
									<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
										<span class="ltext-101 cl2 respon2">
										<?php echo ($texto1);?>
										</span>
									</div>
										
									<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
										<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
										<?php echo ($subtexto1); ?>
										</h2>
									</div>
										
									<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
										<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										<?php  echo ($textboton)?>
										</a>
									</div>
								</div>
							</div>
					</div>		
				</div>
				<?php	}		?>


				<?php
			include('php/docs/conexion/conexion.php');
			$consulta_texto_slide = "SELECT * FROM slides WHERE id='2' ";
			$resultado_consulta = mysqli_query($conexion, $consulta_texto_slide);

			while($registro = mysqli_fetch_array($resultado_consulta)){
			$texto1 = $registro["texto1"];
			$subtexto1 =$registro["subtexto1"];
			$textboton=$registro["boton"];
			$imagen2=$registro["imagen"];
			
			?>

				<div class="item-slick1">
							<div style="background-image: url(php/docs/procesos/<?php echo $imagen2; ?>);	height: calc(100vh - 40px); background-size: cover; background-position: center center;  background-repeat: no-repeat; ">
							
										<div class="container h-full">
											<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
												<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
													<span class="ltext-101 cl2 respon2">
													<?php echo ($texto1);?>
													</span>
												</div>
													
												<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
													<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
													<?php echo ($subtexto1); ?>
													</h2>
												</div>
													
												<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
													<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
													<?php  echo ($textboton)?>
													</a>
												</div>
											</div>
										</div>
						</div>
				</div>

				<?php	}		?>



				<?php
			include('php/docs/conexion/conexion.php');
			$consulta_texto_slide = "SELECT * FROM slides WHERE id='3' ";
			$resultado_consulta = mysqli_query($conexion, $consulta_texto_slide);

			while($registro = mysqli_fetch_array($resultado_consulta)){
			$texto1 = $registro["texto1"];
			$subtexto1 =$registro["subtexto1"];
			$textboton=$registro["boton"];
			$imagen3=$registro["imagen"];
			
			?>


				<div class="item-slick1">
							<div style="background-image: url(php/docs/procesos/<?php echo $imagen3; ?>);	height: calc(100vh - 40px); background-size: cover; background-position: center center;  background-repeat: no-repeat; ">
										
										<div class="container h-full">
											<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
												<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
													<span class="ltext-101 cl2 respon2">
													<?php echo ($texto1);?>
													</span>
												</div>
													
												<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
													<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
													<?php echo ($subtexto1); ?>
													</h2>
												</div>
													
												<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
													<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
													<?php  echo ($textboton)?>
													</a>
												</div>
											</div>
										</div>
								</div>
				</div>
			</div>
		</div>
	</section>
<?php	}		?>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Autos disponibles
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos los autos
					</button>
				</div>
			</div>

			<div class="row isotope-grid">



						<?php
						include('php/docs/conexion/conexion.php');

						$consulta_mysqli = "SELECT * FROM autos";
						$resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

						while($registro = mysqli_fetch_array($resultado_consulta_mysqli)){
							$id= $registro['id'];
							$modelo = $registro["modelo"];
							$precio = $registro["precio"];
							$imagen1 = $registro["imguno"];
					
						?>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="php/docs/procesos/<?php echo $imagen1; ?>" alt="IMG-PRODUCT">

							<a href="detallesauto.php?id=<?php echo $id?>" class="block2-btn flex-c-m stext-103 cl6 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Observar
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="detallesauto.php?id=<?php echo $id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php
										echo $modelo;
									?>
								</a>
								<a href="detallesauto.php?id=<?php echo $id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php
										echo "$".$precio;
									?>
								</a>

							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				
				
			</div>
		</div>
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
							<a href="index.php" class="stext-107 cl7 hov-cl1 trans-04">
								Inicio
							</a>
						</li>

						<li class="p-b-10">
							<a href="sobrenosotros.php" class="stext-107 cl7 hov-cl1 trans-04">
								Sobre Nosotros
							</a>
						</li>

						<li class="p-b-10">
							<a href="contacto.php" class="stext-107 cl7 hov-cl1 trans-04">
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
						<a href="index.php" class="logo">
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
		$('.js-addwish-b2').on('click', function(e){
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