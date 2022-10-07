@extends('layouts.main_template')

@section('title')
    Home page
@endsection

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner"> <!-- รูปสไลด์ หารูปโปรเจคที่ทำมาลงไว้ -->
      <div class="carousel-item active">
        <img src="{{ asset('assets/images/slide1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/slide2.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/slide3.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="border border-2 rounded">
          <i class="fas fa-home fa-3x text-success mb-3"></i>
          <h2 class="head-title">Projects</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima quasi ipsa voluptas non ab tenetur, 
            culpa atque voluptatum sequi eaque distinctio doloribus iusto quidem qui reprehenderit eum necessitatibus 
            blanditiis!</p>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="border border-2 rounded">
          <i class="fas fa-concierge-bell fa-3x text-warning mb-3"></i>
          <h2 class="head-title">About</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima quasi ipsa voluptas non ab tenetur, 
            culpa atque voluptatum sequi eaque distinctio doloribus iusto quidem qui reprehenderit eum necessitatibus 
            blanditiis!</p>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="border border-2 rounded">
          <i class="fas fa-cloud-showers-heavy fa-3x text-danger mb-3"></i>
          <h2 class="head-title">Contact</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex minima quasi ipsa voluptas non ab tenetur, 
            culpa atque voluptatum sequi eaque distinctio doloribus iusto quidem qui reprehenderit eum necessitatibus 
            blanditiis!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <h2>Blog</h2>
    <hr>
    <div class="row">
      {{-- <div class="col-md-3 mt-2">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('assets/images/iqoption/bg-iqoption.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-text">Bot Iqoption & Signal</h4>
            <p>อัพเดต signal ทุกวัน ไม่เว้นวันหยุด</p>
          </div>
        </div>
      </div> --}}
      <div class="col-md-3 mt-2">

        <a href="{{ url('blog-laravel') }}">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/laravel/bg-laravel.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Laravel</h4>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col-md-3 mt-2">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('assets/images/html/bg-html.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-text">Basic HTML</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-2">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-text">Basic CSS</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3 mt-2">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-text">Jquery</h4>
          </div>
        </div>
      </div>
    </div>







  </div>
    
@endsection

