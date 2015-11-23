@extends('store.template')

@section('content')
	
	<div class="container text-center">

		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i>Carrito de Compras</h1>
		</div>

		<div class="table-cart">
			@if(count($cart))
				<p>
					<a class="btn btn-danger" href="{{ route('cart-trash')}}">Vaciar carrito <i class="fa fa-trash fa-2x"></i></a>
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
									<td>
										<input data-href="{{ route('cart-update', $item->slug)}}" data-id="{{ $item->id }}" class="item-quantity" type="number" min="1" max="100" value="{{ $item->quantity }}" id="product_{{ $item->id }}">
										<!--<a href="" class="btn btn-warning btn-update-item"><i class="fa fa-refresh"></i></a>-->
									</td>
									<td>Bs{{ number_format($item->price * $item->quantity, 2)}}</td>
									<td>
										<a class="btn btn-danger" href="{{ route('cart-delete', $item->slug)}}"><i class="fa fa-remove"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table><hr>
					<h3>
						<span class="label label-success">
        					Total: Bs {{ number_format($total,2) }}
						</span>
					</h3>
				</div>
			@else

				<h3>
					<span class="label label-warning">no hay productos en el carrito</span>
				</h3>
			
			@endif
			<hr>
			<p>
				<a href="{{ route('home')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> seguir comprando</a>
				@if(count($cart))
					<a href="" class="btn btn-primary">continuar <i class="fa fa-arrow-circle-right"></i></a>
				@else
					<a href="" class="btn btn-primary disabled" role="button">continuar <i class="fa fa-arrow-circle-right"></i></a>
				@endif
			</p>
		</div>
	</div>

@stop