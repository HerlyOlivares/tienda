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
						<th><center>Producto</center></th>
						<th><center>Precio</center></th>
						<th><center>Cantidad</center></th>
						<th><center>Subtotal</center></th>
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
				<h3>
					<span class="label label-success">
						Total: ${{ number_format($total, 2) }}
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>

					<a href="{{ route('payment') }}" class="btn btn-warning">
						Pagar con <i class="fa fa-cc-paypal"></i>
					</a>
				</p>
			</div>
		</div>

	</div>

@stop