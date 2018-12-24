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

</br></br>
	<!-- Gallery -->
	{{-- <div class="section-gallery p-t-60 p-b-50">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photo
			</button>

			<button class="label-gallery txt26 trans-0-4" href="cat">
				Cat
			</button>

			<button class="label-gallery txt26 trans-0-4" href="thinner">
				Thinner
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Tinta
			</button>
		</div>
	</div> --}}

		<!-- Blog -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-t-30">
					
					@foreach ($products as $product)
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<img style="height:240px; width:200px" src="{{url('uploads/'.$product->filename)}}" alt="IMG-INTRO">
						</div>

						<div class="wrap-text-blo1 p-t-35">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13">
								{{$product->name}}
							</h4>

							<p class="m-b-20">
								{{$product->description}}
							</p>

								Stock
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								{{$product->stock}}
						</div>
					</div>
				</div>

				@endforeach


			</div>
		</div>
		<br>
		<br>
		<br>
@endsection