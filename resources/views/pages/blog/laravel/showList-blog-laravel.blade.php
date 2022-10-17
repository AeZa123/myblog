@extends('layouts.main_template')

@section('title')
    Blog Laravel
@endsection

@section('content')

<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      <h1 class="display-4 text-center" style="color: red">Blog Laravel</h1>
      {{-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> --}}


    </div>
</div>


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
           
            <h1>Show blog laravel</h1>

            @foreach ($blogs as $blog)
                {{-- <h3>{{$blog->title}}</h3>
                <div>{!!$blog->description!!}</div> --}}
                <ul class="list-group">
                    <li class="list-group-item mb-2"><a class="display-6" href="{{url('showBlog/'.$blog->id)}}" target="_bank">{{$blog->title}}</a> <p style="font-size: 15px;">สร้างเมื่อ {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')  }}</p> </li>
                </ul>
                
            @endforeach
            <br>

            {{-- pagination --}}
            <div style="float: right">
                {{ $blogs->links() }}
            </div>

        </div>
    </div>

</div>



    
@endsection