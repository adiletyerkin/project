@extends('layouts.app')

@section('title-block')
  Add Product
@endsection

    @if(Request :: is('/'))
        @include('layouts.hero')
    @endif

@section('content')



<div class="container mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название продукта</th>
      <th scope="col">Описание</th>
      <th scope="col">Цeна</th>
      <th scope="col">Фото(url)</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $dat)
    <tr>
      <th scope="row">{{ $dat -> id}}</th>
      <td>{{ $dat -> name}}</td>
      <td>{{ $dat -> discription}}</td>
      <td>{{ $dat -> price}}</td>
        <td>{{ $dat -> image}}</td>
      <td><a href= "{{ route ('edituser', $dat-> id )}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        or 
        <a href= "{{ route ('delete', $dat-> id )}}"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $product -> links() }}

</div>


@endsection
  

