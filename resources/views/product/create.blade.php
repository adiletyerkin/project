@extends('layouts.app')

@section('title-block')
  Add Product
@endsection

    @if(Request :: is('/'))
        @include('layouts.hero')
    @endif

@section('content')

  
<div class="container">
  
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Добавить Продукт</h3> 
</div> 
@if(count($errors)>0)
<div class="alert alert-danger">
<ul>
  @foreach($errors->all as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
  <p>{{\Session::get('success')}}</p>
</div>
@endif
<div class="panel-body">
  
<form  method="post" action="{{ url('product') }}" class="form-horizontal" role="form">
{{csrf_field()}}
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Название продукта</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" id="name" placeholder="Название">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Описание</label>
    <div class="col-sm-9">
      <textarea class="form-control" name="discription" id="discription"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="price" class="col-sm-3 control-label">Цeна</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="price" id="price" placeholder="" style="width: 40%">
    </div>
  </div>
<div class="form-group">
    <label for="price" class="col-sm-3 control-label">Фото(url)</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="image" id="price" placeholder="" style="width: 70%">
    </div>
  </div>
   <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->


@endsection
  

