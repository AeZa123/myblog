<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head-bs3')
</head>
<body>
    {{-- @include('includes.menu') --}}
    <div>
        @yield('content')
    </div>

    @include('includes.foot')
    
</body>
</html>