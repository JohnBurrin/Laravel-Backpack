<!doctype html>
<html lang="en">
<head>
    @include('includes.header')
</head>
<body>
    @include('includes.navbar')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @yield('content')
    </main>
</html>
@include('includes.footer')
</body>
