@extends('layouts.main_template')

@section('title')
Learning {{ $blogName }}
@endsection

@section('content')

<style>
    /* .a{
       
        color: rgb(0, 0, 0);
    } */
    .li{
        background:  rgb(255, 255, 255); 
        border: 1px solid #ebebeb;
        /* color: rgb(134, 134, 134); */
        transition: all ease-in-out 0.3s;
    }
    .li:hover{
        background:  #c8ead1;
        color: rgb(2, 131, 2);
        transform: translateY(-5px);
        
    }
    /* .a:hover{
        background: rgb(1, 90, 1);
        color: rgb(1, 90, 1);
    } */
</style>


{{-- <div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      
      <h1 class="display-4 text-center" style="font-weight: bold"><strong>Learning {{$blogName}}</strong> </h1>

    </div>
</div> --}}
<input id="blogName" type="hidden" value="{{$blogName}}">


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <div class="text-center mt-3 mb-3">
                <label for="" style="display: block; font-size: 2rem">ค้นหา</label>
                <input style="width: 60%; display:revert;" type="text" class="form-control" id="search" name="search" placeholder="Keyword....">
                {{-- <input id="search" name="search" type="text" placeholder="Search...."> --}}
            </div><br>
   
    
           
            <h5 class="text-center mb-4" id="change-text">รายการล่าสุด</h5>
            
      

            <div class="list" >
            @foreach ($blogs as $blog)
               
                    <ul class="list-group" >
                        <a  class="a display-6 " href="{{url('showBlog/'.$blog->id)}}" target="_bank">
                            <li class="list-group-item mb-2 li rounded ">{{$blog->title}} <p style="font-size: 15px;">สร้างเมื่อ {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')  }}</p> </li>
                        </a>
                    </ul>
            @endforeach
            </div>
            <br>

            {{-- pagination --}}
            {{-- <div style="float: right">
                {{ $blogs->links() }}
            </div> --}}

        </div>
    </div>

    <div class="ajax-load text-center" style="display:none">
        <i class="mdi mdi-48px mdi-spin mdi-loading"></i>
    </div>

    <input type="hidden" id="start" value="0">
    <input type="hidden" id="rowperpage" value="{{$rowperpage}}">
    <input type="hidden" id="totalrecords" value="{{$totalrecords;}}">

</div>

<script>
    $('#search').on('keyup',function(){
        $value=$(this).val();
        var blogName = $("#blogName").val();
        console.log(blogName);
        $.ajax({
            type : 'get',
            // url : '{{URL::to('table/laravel/search')}}',
            url : '{{URL::to('search')}}',
            data:{'search':$value,
                'blogName': blogName,       
            },
                success:function(data){
                $('.list').html(data);


                if($value != ''){
                    $('#change-text').html('รายการที่ตรงกับคำค้นหา')
                }else{
                    $('#change-text').html('รายการล่าสุด')
                }
                console.log(data);
            
            }
        });
    })


    // fetch blog
    checkWindowSize();

    function checkWindowSize(){
       
        if($(window).height() >= $(document).height()){
            
            fetchData();
           
            
        }
    }


    function fetchData(){
        var start = Number($('#start').val());
        var allcount = Number($('#totalrecords').val());    
        var rowperpage = Number($('#rowperpage').val());
        start = start + rowperpage;    


        if(start <= allcount){
            $('#start').val(start);
            

            $.ajax({
                url:"{{route('test')}}",
                data: {start:start},
                dataType:'json',
                success: function(response){

                    //add
                    $(".list-group:last").after(response.html).show().fadeIn("slow")

                    //check
                    checkWindowSize();
                }
            });
            
        }
       

    }

    $(document).on('touchmove', onScroll);

        function onScroll(){
            if($(window).scrollTop() > $(document).height() - $(window).height()-100) {
    
                fetchData();
            }
        }

        $(window).scroll(function(){
            var position = $(window).scrollTop();
            var bottom = $(document).height() - $(window).height();

            if(position == bottom){
                // $('.ajax-load').show();
                $('.ajax-load').show();
                
                // fetchData();
                

                setTimeout(() => {
                    fetchData();
                    $('.ajax-load').hide();
                                    
                }, 500);
                

            }
            
        })


</script>


<script>
    


</script>




    
@endsection