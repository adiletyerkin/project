@extends('layouts.app')

@section('title-block')
	List of users
@endsection

@section('content')

	<h1>List of users</h1>

<div class="container mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($registrationData as $dat)
    <tr>
      <th scope="row">{{ $dat -> id}}</th>
      <td>{{ $dat -> name}}</td>
      <td>{{ $dat -> surname}}</td>
      <td>{{ $dat -> email}}</td>
      <td>{{ $dat -> phone}}</td>
      <td><a href= "{{ route ('edituser', $dat-> id )}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        or 
        <a href= "{{ route ('delete', $dat-> id )}}"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $registrationData -> links() }}

</div>

@endsection
	


<!--         <form method="POST" id="delete-form- {{ $dat -> id }}" action="{{ route('delete', $dat -> id ) }}" style="display: none">
          {{csrf_field()}}
          {{method_field('delete')}}
          
        </form>

        <button onclick="if (confirm('Вы уверены что хотите удалить этого пользователя ?!')) {
          event.preventDefault();
          document.getElementByID('delete-form-{{ $dat -> id}}').submit(); } else{
             event.preventDefault();
          }


        "><i class="fa fa-trash" aria-hidden="true"></i></button> -->