@extends('layouts.main_template')

@section('title')
    Home page
@endsection

@section('content')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


{{-- <br> --}}


<div class="d-flex align-items-center pt-5 pb-5 bg-head" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 d-flex flex-column">
        <h1 class="display-1 text-center text-green-style">MyBlog</h1>
        <h4 class="text-center mt-5 text-green-style">เว็บที่จะช่วยให้คุณได้ฝึกทักการเขียนโปรแกรม Web Applications ด้วยภษาต่างๆเช่น php, javascript, html, css, เป็นต้น</h4>
        
      </div>
      
    </div>

  </div>
</div>
<br>
<br>

<br>
<br>

<section id="services" class="services">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    

    <div class="section-title">
      <h2>Tutorials</h2>
      {{-- <p>Check our Services</p> --}}
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <a href="{{route('blogs.html')}}">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-html5 bx-lg text-white"></i></div>
          <h4>HTML</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus veritatis nulla consequuntur accusantium! Fuga, nesciunt expedita! Animi nisi sint hic eligendi rem voluptate, consequuntur natus mollitia culpa vitae esse quo?</p>
        </div>
      </a>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
        <a href="">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-css3 bx-lg text-white"></i></div>
          <h4>CSS</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam rerum natus omnis aliquid ut atque dolor dolores ullam. Error quasi facere omnis optio voluptate reiciendis consequatur facilis labore adipisci vel.</p>
        </div>
      </a>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
        <a href="">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-javascript bx-lg text-white"></i></div>
          <h4>Javascript</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam rerum natus omnis aliquid ut atque dolor dolores ullam. Error quasi facere omnis optio voluptate reiciendis consequatur facilis labore adipisci vel.</p>
        </div>
      </a>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
        <a href="{{route('blogs.laravel')}}">
        <div class="icon-box">
          <div class="icon"><i class="fab fa-laravel fa-5x text-white"></i></div>
          <h4>Laravel</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis cupiditate nulla hic nisi delectus, quaerat praesentium, odit iste officia incidunt quod. Saepe excepturi explicabo repudiandae voluptatibus dolore laboriosam eos modi.</p>
        </div>
      </a>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
        <a href="">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-vuejs bx-lg text-white"></i></div>
          <h4>Vue.js</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus provident nam, magni quis eligendi sapiente cumque consectetur libero temporibus exercitationem. Dolore aperiam quod tempore praesentium quis dolorum harum excepturi quisquam!</p>
        </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
        <a href="">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-code-alt bx-lg text-white"></i></div>
          <h4>Other</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus provident nam, magni quis eligendi sapiente cumque consectetur libero temporibus exercitationem. Dolore aperiam quod tempore praesentium quis dolorum harum excepturi quisquam!</p>
        </div>
      </a>
      </div>

    </div>

  </div>
</section>


  
    
@endsection

