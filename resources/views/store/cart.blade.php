@extends('store.template')

@section('content')
	
	<div class="container tetx-center">

		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
		</div>

		<div class="table-cart">
			@if(count($cart))
				<p>
					<a class="btn btn-warning" href="{{ route('cart-trash')}}">Vaciar carrito <i class="fa fa-trash fa-2x"></i></a>
				</p>
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered">
						<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
						<th>Eliminar</th>
					</tr>
						</thead>
						<tbody>
							@foreach($cart as $item)
								<tr>
									<td><img src ="{{ asset($item->image)}}" width="200"></td>
									<td>{{ $item->name }}</td>
									<td>Bs{{ number_format($item->price, 2)}}</td>
									<td>{{ $item->quantity }}</td>
									<td>Bs{{ number_format($item->price * $item->quantity, 2)}}</td>
									<td>
										<a class="btn btn-danger" href="{{ route('cart-delete', $item->slug)}}"><i class="fa fa-remove"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table><hr>
					
				</div>
			@else

				<h3>
					<span class="label label-warning">no hay productos en el carrito</span>
				</h3>
			
			@endif
			<hr>
			
		</div>
	</div>

@stop