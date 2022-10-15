@extends('dashboard.layouts.layout_dashboard')

@section('head')
<!-- Start datatable css -->
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css"> --}}
    
@endsection

@section('title')
    table blog laravel
@endsection
@section('content')

    <div class="main-content-inner">
        <h1>Table Blog Laravel</h1>
        
        <div class="row">    
            
            <!-- table danger start -->
            <div class="col-md-12 mt-5">
                <div style="text-align: right">
                    <a href="{{ route('laravelblog') }}" class="btn btn-primary text-center mb-2" >Create Blog</a>
        
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
                                            {{-- <th scope="col">Created At</th> --}}
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <th scope="row">{{$blog->id}}</th>
                                                <td>{{$blog->title}}</td>
                                                {{-- <td>{{$blog->created_at}}</td> --}}
                                                <td>
                                                    <i class="ti-pencil-alt pr-2"></i>
                                                    <i class="ti-trash"></i>
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table danger end -->
           
        </div>
        
    </div>
    
@endsection

@section('foot')

 <!-- Start datatable js -->
 {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> --}}
    
@endsection

