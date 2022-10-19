@extends('dashboard.layouts.layout_dashboard')

@section('head')


@endsection

@section('title')
table blog laravel
@endsection


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">


    <div class="main-content-inner">
        <br>
        <h1>Table Blog Laravel</h1>
        
       

        <div class="row">    
            
            <!-- table danger start -->
            <div class="col-md-12 mt-5">
                <div style="text-align: right">
                    <a href="{{ route('laravelblog') }}" class="btn btn-primary text-center mb-3" >Create Blog</a>
        
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">All Blog Laravel</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-danger">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <th scope="row">{{$blog->id}}</th>
                                                <td><a href="{{url('showBlog/'.$blog->id)}}" target="_bank">{{$blog->title}} </a></td>
                                                {{-- <td>{{$blog->created_at}}</td> --}}
                                                <td>
                                                    <i class="ti-pencil-alt pr-2"></i>
                                                    <i class="ti-trash"></i>
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




        <hr>
        <div class="container mt-5">
            <h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
            <table class="table table-bordered test">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>title</th>
                        <th>created_at</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>




    </div>


    <script type="text/javascript">
        $(function () {
          var table = $('.test').DataTable({
              processing: true,
              serverSide: true,
              ajax: "/blog-laravel",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'title', name: 'title'},
                  {data: 'created_at', name: 'created_at'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
        });
        
      </script>
    
    
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    @endsection
    
    @section('foot')

    
    @endsection

