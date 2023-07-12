

    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                {{-- <a href="index.html"><img src="{{ asset('assets-dashboard/images/icon/logo.png') }}" alt="logo"></a> --}}
                <h1 class="text-white">MyBlog</h1>

            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li><a href="{{route('dashboard')}}"><i class="ti-map-alt"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{route('show.members')}}"><i class="ti-map-alt"></i> <span>Members</span></a></li>
                        <li><a href="{{url('table/laravel')}}"><i class="ti-layout-sidebar-left"></i> <span>Blog</span></a></li>
                        {{-- <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Blog</span></a>
                            <ul class="collapse">
                                <li><a href="{{url('table/laravel')}}">All Blog</a></li>
                                <li><a href="{{ route('laravelblog') }}">Write Blog</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Javascript</a></li>
                            </ul>
                        </li> --}}
                        <li><a href=""><i class="ti-map-alt"></i> <span>Categories</span></a></li>
                        {{-- <li class="active">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            <ul class="collapse">
                               
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    {{ __('Logout') }}>logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li> --}}
                        
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            {{ __('Logout') }}> <i class="fa fa-sign-out"></i> <span>logout</span></a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                       
                       
                        
                       
                        
                        {{-- <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li> --}}
                        
                       
                       
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    




