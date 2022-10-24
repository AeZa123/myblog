{{-- @extends('layouts.main_template-bs3') --}}
@extends('dashboard.layouts.layout_dashboard_bs3')
@section('title')
    Edit Blog
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
    
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1 class="text-danger">Edit Blog</h1><hr>
                <form id="form" action="{{ url('update/laravel/'.$blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Title</label>
                    <input type="text" class="form-control" value="{{$blog->title}}" name="title" required>
                    <div class="form-group">
                        <label class="col-form-label">category</label>
                        <select class="custom-select " name="category">
                            <option selected="selected">{{ $blog->category }}</option>
                            <option>No category</option>
                            <option>HTML</option>
                            <option>CSS</option>
                            <option>Bootstrap</option>
                            <option>Tailwind</option>
                            <option>Javascript</option>
                            <option>Jquery & Ajax</option>
                            <option>Vue.js</option>
                            <option>Php</option>
                            <option>Laravel</option>
                        </select>
                    </div>
                    <label for="" class="mt-2">Description</label>
                    <textarea name="description" id="summernote" cols="30" rows="10" required>{{$blog->description}}</textarea>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-warning mt-3">Edit</button>
                        <a href="{{ url('/') }}" type="" class="btn btn-danger mt-3">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        $('#summernote').summernote({
          placeholder: 'text',
          tabsize: 2,
          height: 300
        });
    </script>





       <!-- edit data -->
    <script>

        $(function(){
            $('#form').on('submit', function(e){
            e.preventDefault();
           
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
                            // $(form)[0].reset();
                           
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