@extends('dashboard.layouts.layout_dashboard')

@section('head')
<meta name="_token" content="{{ csrf_token() }}">


@endsection

@section('title')
table blog laravel
@endsection


@section('content')
{{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    <div class="main-content-inner">
        <br>
        <h1>Manage Blog Laravel</h1>

        <div class="row">    
            
            <!-- table danger start -->
            <div class="col-md-12 mt-5">
                <div style="text-align: right">
                    <a href="{{ route('laravelblog') }}" class="btn btn-primary text-center mb-3" >Create Blog</a>
        
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-2" style="float: left">Table Blog Laravel</h4>
                       
                        
                        <div class="search-box pull-right mb-3">
                            
                            <form action="#">
                                <input type="text" id="search" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                                {{-- <input type="text" id="search" name="search"> --}}
                            </form>
                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-danger">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">created at</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <th scope="row">{{$blog->id}}</th>
                                                <td><a href="{{url('showBlog/'.$blog->id)}}" target="_bank">{{$blog->title}} </a></td>
                                                <td>{{$blog->category}}</td>
                                                <td>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')  }}</td>
                                                <td>
                                                    <a href="{{url('blog/laravel/edit/'.$blog->id)}}">
                                                        <i class="ti-pencil-alt pr-3 text-warning" title="Edit"></i>
                                                    </a>
                                                    <a href="">
                                                        <i class="ti-trash text-danger" title="Delete"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                        {{-- <a class="display-6" href="{{url('showBlog/'.$blog->id)}}" target="_bank">{{$blog->title}}</a> --}}
                                        
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div style="float: right">
                    {{ $blogs->links() }}

                </div>
            </div>
            <!-- table danger end -->

           
        </div>




    </div>










   
        <script type="text/javascript">
            $('#search').on('keyup',function(){
                $value=$(this).val();
                $.ajax({
                    type : 'get',
                    url : '{{URL::to('table/laravel/search')}}',
                    data:{'search':$value},
                    success:function(data){
                        $('tbody').html(data);
                        // console.log(data);
                    }
                });
            })


            // $('#show').on('keyup',function(){
            //     $value=$(this).val();
            //     $.ajax({
            //         type : 'get',
            //         url : '{{URL::to('table/laravel/search')}}',
            //         data:{'search':$value},
            //         success:function(data){
            //             $('tbody').html(data);
            //             console.log(data);
            //         }
            //     });
            // })
        </script>

        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
        











   
    
    @endsection
    
    @section('foot')

    
    @endsection

