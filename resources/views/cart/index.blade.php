@extends('layouts.app')

@section('title-block')
	Cart
@endsection

@section('content')
	<h2>Your Cart</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Название</th>
				<th>Цена</th>
				<th>Количество</th>
				<th>Сумма</th>
				<th>Действие</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($cartItems as $item)
			<tr>
				<td scope="row">{{$item->name}} </td>
				<td>{{$item->price}}</td>

				<td>
					<form action="{{route('cart.update',$item->id)}}">
						<input name="quantity" type="number" value="{{$item->quantity}}">
					<input type="submit" value="Изменить">
					</form>
					
				</td>
				<td>{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
					</td>
				<td><a href="{{route('cart.destroy',$item->id)}}">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<h3>
		Общая сумма: {{\Cart::session(auth()->id())->getTotal()}} тг
	</h3>
	<a href="" class="btn btn-primary" role="button">Купить</a>
@endsection
	
