@extends('layouts.layout')

@section('title', 'Actividades')

@section('content')




	<!-- Subcategorías actividades -->
	<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">

        <div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					SUBCATEGORÍAS
				</h3>
		</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Tab panes -->
				<div class="tab-content p-t-50">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2 ">
                                        <a href="/excursiones">
										<div class="block2-pic hov-img0">
											<img src="img/pequeruta-3.jpg" alt="IMG-EXCURSIONES" class="w-100 custom-img">

											<a href="/excursiones" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-link-page">
												Ver más
											</a>
										</div>
                                        </a>
										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="/excursiones" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													Excursiones
												</a>

											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="/excursiones" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
								
									<!-- Block2 -->
									<div class="block2">
                                        <a href="/extraescolares">
										<div class="block2-pic hov-img0">
											<img src="img/img-1.jpg" alt="IMG-EXTRAESCOLARES" class="w-100 custom-img">

											<a href="/extraescolares" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-link-page">
												Ver más
											</a>
										</div>
                                        </a>
										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="/extraescolares" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													Extraescolares
												</a>

											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="/extraescolares" class="btn-addwish-b2 dis-block pos-relative js-link-page">
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="img/pequeruta-img.png" alt="IMG-PEQUERUTA" class="w-100 custom-img">

											<a href="route{{ ('forms.rutaPequeForm') }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
												Inscríbete
											</a>
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="/pequeruta" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													Pequerutas
												</a>

											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="/pequeruta" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
												</a>
											</div>
										</div>
									</div>
								</div>

			</div>
		</div>
	</section>

    <!-- Actividades -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					ACTIVIDADES
				</h3>
			</div>

			<div class="row">

            <h3>Aquí un buen foreach</h3>

			</div>
		</div>
	</section>


@endsection