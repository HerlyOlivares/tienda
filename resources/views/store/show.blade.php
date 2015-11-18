@extends('store.template')

@section('content')
	<h1>DETALLE DEL PRODUCTO</h1>
	<div class="product-block">
		<img src="{{asset($producto->image)}}" alt="" width="300">
	</div>

	<div class="product-block">
		<h3>{{$producto->name}}</h3>
		<div class="product-info">
			<p>{{$producto->description}}</p>
			<p>Precio: ${{number_format($producto->precio),2}}</p>
			<p>
				<a href="#" title="">Comprar</a>
			</p>
		</div>
	</div>
	<div class="regresar">
		<a href="{{ route('home') }}" title="">regresar</a>
	</div>
@stop