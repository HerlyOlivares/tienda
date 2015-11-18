@extends('store.template')

@section('content')

	<div class="productos">
		@foreach($productos as $productos)
			
			<div class="productos">
				<h3>{{$productos->name}}</h3>
				<img src="{{$productos->image}}" width="200" alt="">
				<div class="producto-info">
					<p>{{$productos->extract}}</p>
					<p>Precio:${{number_format($productos->precio),2}}</p>
					<p>
						<a href="#">Comprar</a>
						<a href="{{route('product-detail', $productos->slug)}}" title="">Leer mas...</a>
					</p>
				</div>
			</div>
			
		@endforeach
	</div>

@stop