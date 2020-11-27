<!doctype html>
<html lang="en">
<head>
    @include('includes.header')
</head>
  <body>
      @include('includes.navbar')
      <div class="container-fluid">
          <div class="row">
              <div class="col-1">
                  @include('includes.sidebar')
              </div>
              <div class="col-11">
                  <!-- Content here -->
                  @yield('content')
              </div>
          </div>
    </div>
    @include('includes.footer')
  </body>
</html>
