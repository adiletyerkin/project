@extends('layouts.app')

@section('title-block')
  Add Product
@endsection

    @if(Request :: is('/'))
        @include('layouts.hero')
    @endif

@section('content')





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
      <td>{{ $item -> discription}}</td>
      <td>{{ $item -> price}}</td>
        <td>{{ $item -> image}}</td>

        <td><a href= "{{ route ('updatePr', $item-> id )}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        or 
        <a href= "{{route('destroyPr',$item->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>

      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
  

