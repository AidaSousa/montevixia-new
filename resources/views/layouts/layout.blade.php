<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/material-design-iconic-font.min.css') }}" /> -->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/icon-font.min.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/animsition.min.css') }}" />

	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}" />  -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/perfect-scrollbar.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<!--georgette iconos-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


	<title>@yield('title') - Ampa Montevixia</title>

</head>

<body class="animsition">
<header class="header-v2">
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop p-l-45">					
				<!-- Logo desktop -->		
				<a href="{{ url('/') }}" class="logo">
					<img src="{{ URL::asset('img/anpa.png') }}" alt="IMG-LOGO">
				</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.html">Actividades</a>
								<ul class="sub-menu">
									<li><a href="index.html">Actividades culturales</a></li>
									<li><a href="home-02.html">Actividades extraescolares</a></li>
									<li><a href="home-03.html">Excursiones</a></li>
								</ul>

						</li>
						<li>
							<a href="{{ route('blogs.index') }}">Blog</a>
						</li>
						@auth
						<li>
							<a href="{{ route('profile') }}">Mi Perfil</a>
						</li>

						<form action="{{ route('logout') }}" method="GET">
    						<button type="submit">Cerrar sesión</button>
						</form>

						@else
        				<li>
            				<a href="{{ route('login') }}">Login</a>
        				</li>
        				<li>
            				<a href="{{ route('register') }}">Registro</a>
       					 </li>
       					 @endauth

					</ul>
				</div>	

					<!-- Icon header -->
					<!--<div class="wrap-icon-header flex-w flex-r-m h-full">
						 <div class="flex-c-m h-full p-r-24">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div> 
					</div>-->

					<!-- <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div> -->

					<!--<div class="flex-c-m h-full p-lr-19">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
							<i class="zmdi zmdi-menu"></i>
						</div>-->
					</div>
			</div>
			</nav>
		</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="img/anpa.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<!-- <div class="flex-c-m h-full p-r-10">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div> -->
			</div>

			<!-- <div class="flex-c-m h-full p-lr-10 bor5">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>
		</div> -->

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>


			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="main-menu-m">
					<li>
						<a href="index.html">Actividades</a>
						<ul class="sub-menu-m">
							<li><a href="index.html">Actividades culturales</a></li>
							<li><a href="home-02.html">Actividades extraescolares</a></li>
							<li><a href="home-03.html">Excursiones</a></li>
						</ul>
						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="http://anpamontevixia.blogspot.com/" target="_blank">Blog</a>
					</li>

				<li>
					<a href="{{ route('login') }}">Mi Perfil</a>
				</li>

				<li>
					<a href="{{ route('login') }}">Cerrar Sesion</a>
        </li>

					<li>
						<a href="{{ route('login') }}">Login</a>
					</li>

					<li>
						<a href="{{ route('register') }}">Registro</a>
					</li>
				</ul>
			</div>

			<!-- Modal Search -->
			<!-- <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="icon/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div> -->
	</header>

	


	<!-- <div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div> -->

	<!-- <div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul> -->

	<!-- <div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div> -->
	</div>
	</div>
	</div>
	</div>

	@yield('content')


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
				<ul text-justify>
						<li class="p-b-10">
							< <a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								CONTACTO
							</a>
						</li>
						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Tlfn.:604 049 984
							</a>
						</li>

						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								e-mail: anpaesanjurjo@gmail.com
							</a>
						</li>

						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Praza San Jose, s/n
								15002, A Coruña
							</a>
						</li>
					</ul>
				</div>

				
				<div class="col-sm-6 col-lg-3 p-b-50">
				<ul  class="text-justify">
				<li class="p-b-10">
					
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								COMEDOR
							</a>
						</li>
						<li class="p-b-10">
						<a href="https://jardanaycomedores.es/sanjurjo/wp-login.php?itsec-hb-token=panel&redirect_to=https%3A%2F%2Fjardanaycomedores.es%2Fsanjurjo%2F" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
   Formulario alta servizo comedor e madrugadores Usuario: torredehercules Contrasinal: comedores2022
</a>

						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<ul text-justify>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								T. 981 12 66 27 (de 8 a 18h)
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								comedor@jardanay.es
							</a>
						</li>
						<li class="p-b-10 text-justify">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
							Teléfono (só SMS ou chamasdas en horario de servizo de madrugadores e comedor) 650 471 382
							</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 p-b-50">
					<ul text-justify>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Politica de Privacidad
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Aviso legal
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04 text-decoration-none">
								Politica de Cookies
							</a>
						</li>
					</ul>
				</div>
			</div>

			<p class="stext-107 cl6 txt-center">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

	<!-- <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script> -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script src="{{ asset('js/animsition.min.js') }}"></script>

	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	<!-- <script src="{{ asset('js/select2.min.js') }}"></script> -->
	<!-- <script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script> -->

	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/daterangepicker.js') }}"></script>

	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/slick-custom.js') }}"></script>

	<script src="{{ asset('js/parallax100.js') }}"></script>
	<script>
		$('.parallax100').parallax100();
	</script>

	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>

	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function() {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>

	<script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>