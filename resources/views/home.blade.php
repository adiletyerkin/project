@extends('layouts.app')
@section('title-block')
    MAIN PAGE
@endsection
@section('content')
    <h1>HOME</h1>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
          

                <div >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
