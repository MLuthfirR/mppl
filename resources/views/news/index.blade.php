@extends('layouts.master')

@section('title', 'News')

@section('content')

	<!-- Title Page -->
	<section class="section-slide">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				News
			</h3>
		</div>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index.html" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					News
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					@foreach ($newss as $news)
					<!-- Block1 -->
					<div class="blo1">

						<div class="wrap-text-blo1 p-t-35">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13">
								{{$news->name}}
							</h4>

							<p class="m-b-20">
								{{$news->description}}
							</p>
						</div>
					</div>
				</div>

				@endforeach
						
			</div>
		</div>
	</section>
@endsection