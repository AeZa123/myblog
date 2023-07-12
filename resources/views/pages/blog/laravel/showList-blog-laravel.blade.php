@extends('layouts.main_template')

@section('title')
Learning {{ $blogName }}
@endsection

@section('content')

<style>
    .a{
       
        color: rgb(0, 0, 0);
    }
    .a:hover{
        color: rgb(0, 0, 0);
    }
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
    body{
        background: rgb(250, 250, 250);
    }


.card {
  position: relative;
  margin: 15px auto;
  /* width: 450px; */
  /* padding: 20px; */
  /* box-shadow: 3px 10px 20px rgba(0, 0, 0, 0.2); */
  border:1px solid #ebebeb
  border-radius: 3px;
  /* border: 0; */
}

.hover-blog{
  color: #151515;
  background: #ffffff;
  transition: ease-in-out 0.3s;
}

.hover-blog:hover{
  border-color: #fff;
  /* background: linear-gradient(180deg, #5ce477 0%, #4faa25 100%); */
  box-shadow: 3px 10px 20px rgba(0, 0, 0, 0.2);
  transform: translateY(-10px);
  /* color: #c2ffd9; */
}


.scrollup {
    width:40px;
	height:40px;
	opacity:0.3;
	position:fixed;
	bottom:50px;
	right:100px;
	display:none;
	text-indent:-9999px;
	background: url(http://seenual.com/wp-content/uploads/2016/03/icon_top.png) no-repeat;
}



</style>


<div class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
      
      <h1 class="display-4 text-center" style="font-weight: bold"><strong>Learning {{$blogName}}</strong> </h1>

    </div>
</div>
<input id="blogName" type="hidden" value="{{$blogName}}">




<div class="container">

    {{--  --}}
    <div class="row justify-content-md-center">
        <div class="col-md-9">

            <div class="text-center mt-3 mb-3">
                <label for="" style="display: block; font-size: 2rem">ค้นหา</label>
                <input style="width: 60%; display:revert;" type="text" class="form-control" id="search" name="search" placeholder="Keyword....">
                {{-- <input id="search" name="search" type="text" placeholder="Search...."> --}}
            </div><br>
   
    
           
            <h5 class="text-center mb-4" id="change-text">รายการล่าสุด</h5>
            {{--  --}}
        </div>
            
      

            <div   >
                <div class="row list" id="post-data">
                @include('pages.blog.laravel.data')
                </div>
            </div>
            <br>

            <div class="ajax-load text-center" style="display: none;">
                <p><img src="{{asset('assets/images/loader/loader1.gif')}}" width="50" height="50" alt=""> รอสักครู่</p>
            </div>

          

        {{-- </div> --}}
    </div>

    {{-- <div class="ajax-load text-center" style="display:none">
        <i class="mdi mdi-48px mdi-spin mdi-loading"></i>
    </div> --}}

</div>

  
<a href="#" class="scrollup">Scroll</a>



<script>
    function loadMoreData(page){
        $.ajax({
            url:'?page=' + page,
            type:'get',
            beforeSend: function(){
                $(".ajax-load").show();
            }
        })
        .done(function(data){
            if(data.html == ""){
                $('.ajax-load').html("ไม่มีเนื้อหาที่จะแสดงแล้ว");
                return;
            }else{

                setTimeout(() => {
                    
                    
                    $('.ajax-load').hide();
                                        
                    $('#post-data').append(data.html);
                }, 1000);
            }
            
        })
        .fail(function(jqXHR,ajaxOptions,thrownError){
            alert('Server not responding...');
        });
    }

    var page = 1;
    $(window).scroll(function(){
        var a = $(window).scrollTop() + $(window).height() + 10;
        var b = $(document).height();
        // console.log(a);
        // console.log(b);

        if($(window).scrollTop() + $(window).height() + 10 >= $(document).height()){
            // alert('ahahahah')
            page++;
            loadMoreData(page);
        }
    });
</script>

<script>
    $('#search').on('keyup',function(){
        $value=$(this).val();
        var blogName = $("#blogName").val();
        // console.log(blogName);
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
                // console.log(data);
            
            }
        });
    })
</script>


<script type="text/javascript">
	$(document).ready(function(){
		// <!--Smooth Page Scroll to Top-->
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
	 
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
		// <!--//-->
		
	});
</script>






    
@endsection