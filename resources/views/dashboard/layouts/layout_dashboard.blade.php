<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.includes.head')

</head>
<body>

    <div class="page-container">
        @include('dashboard.includes.sidebar_menu')
        <div class="main-content">
            @include('dashboard.includes.helper')
         
            @yield('content')
         
        </div>
        @include('dashboard.includes.footer')
    </div>



    
</body>
</html>