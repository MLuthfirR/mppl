@extends('layouts.master')

@section('title', 'Career')

@section('content')

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">
			<h2 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				CAREER
			</h2>
		</div>
	</section>
	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			<span class="tit2 t-center">
				Career
			</span>
			<br>
			<p class="txt9 m-10">
				" Bergabung dengan kami, kami menawarkan Anda kesempatan luar biasa untuk belajar, mengembangkan diri dan menjadi bagian dari pengalaman menarik dan membentuk tim yang hebat. "
			</p>
			<br>
			<br>
			<div class="row">
			@foreach ($careers as $career)
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<img height="240px" src="{{url('uploads/'.$career->filename)}}" alt="IMG-INTRO">
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13">
								{{$career->name}}
							</h4>

							<p class="m-b-20">
								{{$career->description}}
							</p>

								Requirement
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								{{$career->qualification}}
						</div>
					</div>
				</div>

				@endforeach
			</div>
		</div>
	</section>

@endsection