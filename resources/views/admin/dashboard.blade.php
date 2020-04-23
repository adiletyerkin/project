@extends('layouts.app')
@section('title-block')
    MAIN PAGE
@endsection
@section('content')
    <h1>HOME</h1>
 You are logged in ! {{Auth:: user()-> name}}
@endsection
