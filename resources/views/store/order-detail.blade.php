@extends('store.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>Detalle del Pedido
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<h3>Datos de Usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<td>Nombre:</td>
						<td>{{ Auth::user()->name." ".Auth::user()->last_name}}</td>
					</tr>
					<tr>
						<td>Usuario:</td>
						<td>{{Auth::user()->user}}</td>
					</tr>
					<tr>
						<td>Email:</td>
						<td>{{ Auth::user()->email}}</td>
					</tr>
					<tr>
						<td>Direccion:</td>
						<td>{{ Auth::user()->address}}</td>
					</tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del Pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
					<tr>
						<td>{{ $item->name }}</td>
						<td>Bs {{ number_format($item->price,2)}}</td>
						<td>{{ $item->quantity }}</td>
						<td>Bs {{ number_format($item->price * $item->quantity, 2) }}</td>
					</tr>
					@endforeach
				</table><hr>
			</div>
		</div>
	</div>

@stop