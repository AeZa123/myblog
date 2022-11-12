@extends('layouts.main_template')

{{-- <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css"> --}}

@section('title')
    test
@endsection

@section('content')

    @foreach ($blogs as $blog)
    
    
    {{-- <div class="card w-75 post">
        <div class="card-body">
            <h5 class="card-title">{{$blog->title}}</h5>
            <p class="card-text">{{$blog->category}}</p>
        </div>
    </div> --}}

    <ul class="list-group" >
        <a  class="a display-6 " href="{{url('showBlog/'.$blog->id)}}" target="_bank">
            <li class="list-group-item mb-2 li rounded ">{{$blog->title}} <p style="font-size: 15px;">สร้างเมื่อ {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')  }}</p> </li>
        </a>
    </ul>

    @endforeach


    <div class="ajax-load text-center" style="display:none">
        <i class="mdi mdi-48px mdi-spin mdi-loading"></i>
    </div>

    <input type="hidden" id="start" value="0">
    <input type="hidden" id="rowperpage" value="{{$rowperpage}}">
    <input type="hidden" id="totalrecords" value="{{$totalrecords;}}">

    <script>
        checkWindowSize();

        function checkWindowSize(){
            // console.log('testststst');
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
                    // $('.ajax-load').show();
        
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
                                        
                    }, 1000);
                    

                }
                
            })



    </script>




@endsection