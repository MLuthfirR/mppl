@extends('layouts.master')

@section('title', 'Home')

@section('content')

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Welcome
			</span>

			<h2 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				PT WIRATAMA CEMERLANG
			</h2>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							VISI
						</span>
						<p class="t-center m-b-22 size3 m-l-r-auto">
							Menjadi produsen cat, thinner, dan tinta yang bermutu tinggi dengan harga kompetitif baik di pasar lokal maupun internasional
						</p>
						<span class="tit2 t-center">
							MISI
						</span>
						<p class="t-center m-b-22 size3 m-l-r-auto">
							Menghasilkan produk cat, thinner, dan tinta yang dapat memenuhi seluruh persyaratan pelanggan dan regulasi yang berlaku, untuk mencapai kepuasan dan loyalitas pelanggan serta meningkatkan pangsa pasar.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img width="720px" height="340px" src="images/1/9.jpeg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Review -->
	<section class="section-review p-t-80">
		<!-- - -->
		<div class="title-review t-center m-b-2">
			<!-- <span class="tit2 p-l-15 p-r-15">
				Customers Say
			</span> -->

			<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
				ABOUT
			</h3>
		</div>

		<!-- - -->
		<div class="wrap-slick3">
			<div class="slick3">
				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									PT Warnatama Cemerlang berdiri pada tahun 1996 dengan merintis usaha yang bergerak di bidang manufaktur cat, thinner, dan tinta berkualitas untuk menjawab kebutuhan industri dan dekorasi. Seiring berkembangnya waktu dan dedikasi perusahaan untuk memberikan yang terbaik, PT Warnatama Cemerlang kini merupakan perusahaan cat yang handal dengan selalu meningkatan kualitas melalui teknologi terkini dan efisien. "Kualitas adalah segalanya" merupakan motto PT Warnatama Cemerlang. Melalui motto ini, PT Warnatama Cemerlang memiliki harapan untuk memberi yang terbaik dalam mewujudkan inspirasi dan mimpi anda untuk menjadikannya lebih nyata, hidup, dan  bermakna melalui produk-produk yang telah diciptakan dengan kualitas yang terbaik.
								</p>

							</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
	</section>

@endsection