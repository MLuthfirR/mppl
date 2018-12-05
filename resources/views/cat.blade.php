@extends('layouts.master')

@section('title', 'Product')

@section('content')

	<!-- Title Page -->
	<section class="section-slide">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">
			<h2 class="tit6 t-center">
				Our Product
			</h2>
		</div>
	</section>


	<!-- Gallery -->
	<div class="section-gallery p-t-60 p-b-50">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4" data-filter="*">
				All Photo
			</button>

			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter=".interior">
				Cat
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Thinner
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Tinta
			</button>
		</div>

		<!-- Blog -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img height="240px" src="images/2/3.png" alt="IMG-INTRO"></a>

							<div class="time-blog">
								21 Dec 2017
							</div>
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Cat
							</h4></a>

							<p class="m-b-20">
								Berbagai macam warna. Ada merah, kuning, hijau dilangit yang biru
							</p>

							<a href="blog-detail.html" class="txt4">
								Stock
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								20
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
		<br>
		<br>
		<br>
@endsection