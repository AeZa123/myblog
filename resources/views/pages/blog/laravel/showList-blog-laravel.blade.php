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


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <a href="{{ url('form-blog') }}" class="btn btn-primary text-center" style="float: right">Create Blog</a>
            <h1>show blog laravel</h1>

            @foreach ($blogs as $blog)
                {{-- <h3>{{$blog->title}}</h3>
                <div>{!!$blog->description!!}</div> --}}
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{url('showBlog/'.$blog->id)}}" target="_bank">{{$blog->title}}</a></li>
                </ul>
                
            @endforeach

        </div>
    </div>
</div>



    
@endsection