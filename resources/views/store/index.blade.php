@extends('store.template')

@section('content')

	<div class="productos container" id="container">
		@foreach($productos as $productos)
			
			<div class="producto">
				<h3>{{$productos->name}}</h3>
				<img src="{{$productos->image}}" width="200" alt="">
				<div class="producto-info">
					<p>{{$productos->extract}}</p>
					<p>Precio:${{number_format($productos->precio),2}}</p>
					<p>
						<a class="btn btn-warning" href="#"><i class="fa fa-cart-plus"></i> Comprar</a>
						<a class="btn btn-primary" href="{{route('product-detail', $productos->slug)}}" title=""><i class="fa fa-chevron-circle-right"></i> Leer mas...</a>
					</p>
				</div>
			</div>
			
		@endforeach
	</div>

@stop