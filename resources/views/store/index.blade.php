@extends('store.template')

@section('content')
	
	@include('store.partials.slider')

	<div class="productos container" id="container">
		@foreach($productos as $productos)
			
			<div class="text-center producto white-panel">
				<h3>{{$productos->name}}</h3><hr>
				<img src="{{$productos->image}}" width="200" alt="">
				<div class="producto-info">
					<p>{{$productos->extract}}</p>
					<p>Precio:${{number_format($productos->precio),2}}</p>
					<p>
						<a class="btn btn-warning" href="{{route('cart-add', $productos->slug)}}"><i class="fa fa-cart-plus"></i> Comprar</a>
						<a class="btn btn-primary" href="{{route('product-detail', $productos->slug)}}" title=""><i class="fa fa-chevron-circle-right"></i> Leer mas...</a>
					</p>
				</div>
			</div>
			
		@endforeach
	</div>

@stop