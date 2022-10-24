{{-- @extends('layouts.main_template-bs3') --}}
@extends('dashboard.layouts.layout_dashboard_bs3')
@section('title')
    From Blog
@endsection

@section('content')


{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>



    
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <h1 class="text-danger">Create Blog</h1><hr>
                <form id="form" action="{{ url('store/laravel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                    <span class="text-danger font-danger error-text title_error"></span>

                    <div class="form-group">
                        <label class="col-form-label">category</label>
                        <select class="custom-select " name="category">
                            <option selected="selected"></option>
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
                        <span class="text-danger font-danger error-text category_error"></span>
                    </div>

                    <label for="" class="mt-2">Description</label>
                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                    <span class="text-danger font-danger error-text description_error"></span>
                    <div style="text-align: center">
                        {{-- <button type="submit" class="btn btn-success mt-3">Create</button> --}}
                        <input type="submit" id="btn" class="btn btn-success mt-3" value="Creat">
                        <a href="{{ url('/') }}" type="" class="btn btn-danger mt-3">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    {{-- <a href="#" class="btn btn-success" onclick="createData()">sweet alert2</a> --}}

    <script>
        $('#summernote').summernote({
          placeholder: 'text',
          tabsize: 2,
          height: 300
        });
    </script>

    <script>
        $( "blockquote" ).last().addClass( "bg-dt" );
    </script>

    <!-- create data -->
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
        




       

        // function createData(){






        //     swal.fire({
        //         // position: 'top-end',
        //         icon: 'success',
        //         title: 'Your work has been saved',
        //         showConfirmButton: false,
        //         timer: 2000

        //     })
        // }
    </script>

@endsection