@extends('layouts.main_template')

@section('title')
    Blog Laravel
@endsection

@section('content')

<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4 text-center">Blog Laravel</h1>
      {{-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> --}}
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item">name blog</li>
            <li class="list-group-item">name blog</li>
            <li class="list-group-item">name blog</li>
            <li class="list-group-item">name blog</li>
        </ul>
    </div>
</div>

    
@endsection