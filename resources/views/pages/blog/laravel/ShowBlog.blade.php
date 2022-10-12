@extends('layouts.main_template-bs3')
@section('title')
    {{-- {{ $blog->title }} --}}
    {{ $blog[0]->title}}
@endsection

@section('content')


    <div class="container">

        <h1 class="display-1">{{ $blog[0]->title }}</h1><hr>
        {!!$blog[0]->description!!}
        {{-- <span class="" style="font-size: ๅem; color:rgb(138, 138, 138)">สร้างเมื่อ {{ $blog[0]->created_at }}</span> --}}
        <span class="" style="font-size: ๅem; color:rgb(138, 138, 138)">สร้างเมื่อ {{ \Carbon\Carbon::parse($blog[0]->created_at)->format('d/m/Y')  }}</span>



    </div>



@endsection