@extends('layouts.app')

@section('title-block')
	Registration PAGE
@endsection

@section('content')
	<h1>Edit</h1>

	<form action="{{ route('update', $registration -> id)}}" method="post">
		@csrf 
		<div class="form-group">
			<label for="name">Имя: </label>
			<input type="text" name="name" placeholder="введите имя" id="name" class="form-control" value="{{$registration -> name}}">
		</div>
		<div class="form-group">
			<label for="surname">Фамилия: </label>
			<input type="text" name="surname" placeholder="введите фамилию" id="surname" class="form-control"  value="{{$registration -> surname}}">
		</div>
		<div class="form-group">
			<label for="email">Адрес e-mail: </label>
			<input type="text" name="email" placeholder="введите email" id="email" class="form-control"  value="{{$registration -> email}}">
		</div>
		<div class="form-group">
			<label for="phone">Телефон: </label>
			<input type="text" name="phone" placeholder="введите телефон" id="phone" class="form-control"  value="{{$registration -> phone}}">
		</div>
		<div class="form-group">
			<label for="password">Пароль: </label>
			<input type="password" name="password" placeholder="пароль" id="password" class="form-control" >
		</div>
		<div class="form-group">
			<label for="password_confirmation ">Повторите пароль: </label>
			<input type="password" name="password_confirmation" placeholder="повторите пароль" id="password_confirmation " class="form-control"  
		</div>
		<button type="submit" name="button" class="btn btn-success">Отправить</button>
	</form>
@endsection
	
