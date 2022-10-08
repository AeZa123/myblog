@extends('layouts.main_template')

@section('title')
    Blog Laravel
@endsection

@section('content')

<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4 text-center">Blog Laravel</h1>
      {{-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> --}}
      <a href="{{ url('form-blog') }}" class="btn btn-primary text-center">write blog</a>
    </div>
</div>


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <h1>show blog laravel</h1>

            @foreach ($blogs as $blog)
                {{-- <a href="#">{{$blog->title}}</a><br> --}}
                <ul>
                    <li><a href="#">{{$blog->title}}</a></li>
                </ul>
                {{-- <div>{!!$blog->description!!}</div> --}}
                
            @endforeach

        </div>
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