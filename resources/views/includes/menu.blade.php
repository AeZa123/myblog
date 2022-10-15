
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">MyBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            {{-- <li class="nav-item">
              <a class="nav-link"href="{{ url('blog-laravel') }}">test blog</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link"href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="{{ url('service') }}">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="{{ url('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
              @if (Auth::user())
                <a class="nav-link"href="{{ url('dashboard') }}">Dashboard</a>
              @else
                <a class="nav-link"href="{{ url('login') }}">login</a>
                
              @endif
              

            </li>
        </ul>
       
      </div>
    </div>
  </nav>