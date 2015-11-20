@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Detalle del Producto</h1>
	</div>

	<div class="row">

		<div class="col-md-6">
			<div class="product-block">
				<img src="{{asset($producto->image)}}" alt="" width="500">
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{$producto->name}}</h3>
				<div class="product-info">
				<p>{{$producto->description}}</p>
				<h3><span class="label label-success">Precio : Bs {{number_format($producto->precio),2}}</span></h3>
				<p>
					<a class="btn btn-warning btn-block" href="{{route('cart-add', $productos->slug)}}" title="">Comprar <i class="fa fa-cart-plus fa-2x"></i></a>
				</p>
				</div>
			</div>
		</div>
	
	</div>
	<hr>
	<div class="regresar">
			<a class="btn btn-primary" href="{{ route('home') }}" title=""><i class="fa fa-chevron-circle-left"></i> regresar</a>
	</div>
	<br>
</div>
@stop