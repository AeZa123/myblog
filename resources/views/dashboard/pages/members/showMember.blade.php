@extends('dashboard.layouts.layout_dashboard')

@section('title')
member
@endsection


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
    
<div class="main-content-inner">
    <br>
    <h1>Manage Members</h1>

    <div class="row">    
        
        <!-- table danger start -->
        <div class="col-md-12 mt-5">
            <div style="text-align: right">
                <button type="button" class="btn btn-primary text-center mb-3" data-toggle="modal" data-target="#exampleModal">Create Member</button>
    
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-2" style="float: left">Table Members</h4>
                   
                    
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
                                        <th scope="col">NAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">ROLE</th>
                                        <th scope="col">created at</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <th scope="row">{{$member->id}}</th>
                                            <td><a href="" target="_bank">{{$member->name}} </a></td>
                                            <td>{{$member->email}}</td>
                                            <td>{{$member->name_role}}</td>
                                            <td>{{ \Carbon\Carbon::parse($member->created_at)->format('d/m/Y')  }}</td>
                                            <td>
                                               
                                               
                                                    <a href="">
                                                        <i class="ti-pencil-alt pr-3 text-warning" title="Edit"></i>
                                                    </a>
                                                    <a href="#" data-id="" id="deleteBtn">
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
                {{ $members->links() }}

            </div>
        </div>
        <!-- table danger end -->

       
    </div>




</div>


@include('dashboard/pages/members/createMember')


<!-- create data -->
<script>

    $(function(){
        $('#form').on('submit', function(e){
        e.preventDefault();
       
        // alert('test create member');

        var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                    console.log('test');
                },
                success:function(data){
                    if(data.code == 0){
                        $.each(data.error, function(prefix,val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $(form)[0].reset();
                       
                        setInterval(changePage, 2500);
                        
                        function changePage() {
                            document.location.href="{!! route('table-laravel') !!}"
                        }
                        //alert success
                        swal.fire("สำเร็จ", data.msg, "success");
                        
                        
                    }
                    
                }
            });
        });

    });

</script>



@endsection