@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(img/comedor.jpeg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl2 respon2"></span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									Comedor
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Ver
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(img/onosopatio.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 cl2 respon2"></span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 text-white respon1">
									O noso patio
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Ver
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(img/pequeruta-3.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 cl2 respon2"></span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 text-white respon1">
									Pequerutas
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Ver
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- Product -->
	<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					ÚLTIMAS ACTIVIDADES
				</h3>

				@include('components.calendar')
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
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="img/img-1.jpg" alt="IMG-PRODUCT">

											<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
												Inscribese
											</a>
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													Campamento
												</a>

												<span class="stext-105 cl3">
													40 €
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
								
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="img/img-1.jpg" alt="IMG-PRODUCT">

											<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
												Inscribese
											</a>
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													Escalada
												</a>

												<span class="stext-105 cl3">
													25 €
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="img/img-1.jpg" alt="IMG-PRODUCT">

											<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
												Inscríbese
											</a>
										</div>

										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													Surf
												</a>

												<span class="stext-105 cl3">
													30 €
												</span>
											</div>

											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
												</a>
											</div>
										</div>
									</div>
								</div>
	</section>


	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					ÚLTIMAS ENTRADAS AL BLOG
				</h3>
			</div>

			<div class="row">

		@foreach($latest_blogs as $blog)

			<div class="col-sm-6 col-md-4 p-b-40">
				<div class="blog-item">
					<div class="hov-img0">
						<a href="{{ route('blogs.show', $blog->id) }}">
							<img class="w-100 custom-img" src="{{ asset($blog->image_path) }}" alt="Imagen del blog">
						</a>
					</div>
					<div class="p-t-15">
					<div class="stext-107 flex-w p-b-14">
						<span class="m-r-3">
							<span class="cl4">
								Por
							</span>

							<span class="cl5">
							{{ isset($blog->author) ? $blog->author : 'Administrador' }}
							</span>
						</span>

						<span>
							<span class="cl4">
								El
							</span>

							<span class="cl5">
							{{ $blog->created_at?->format('d \d\e F Y') }}
							</span>
						</span>
					</div>

					<h4 class="p-b-12">
						<a href="{{ route('blogs.show', $blog->id) }}" class="mtext-101 cl2 hov-cl1 trans-04">
							{{ $blog->title }}
						</a>
					</h4>

					<p class="stext-108 cl6 text-justify">
						{{ Str::limit($blog->content, 150) }}
					</p>

				</div>
			</div>
			</div>
@endforeach

			</div>
		</div>
	</section>

@endsection