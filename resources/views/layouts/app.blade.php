<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Laravel knows to look for the compiled css in /public/css -->
  <link rel="stylesheet" href="/css/app.css">
  <title>Acme</title>
</head>
<body>
  @include('inc.navbar')

  <div class="container">
    <!-- Only include if hitting home page route -->
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
    <div class="row">
      <div class="col-md-8 col-lg-8">
        <!-- Looks in views folder and renders HTML wrapped in section('content') -->
        @yield('content')
      </div>
      <div class="col-md-4 col-lg-4">
        <!-- Includes sidebar.blade file in views/inc. -->
        @include('inc.sidebar')
      </div>
    </div>
  </div>
  <footer id="footer" class="text-center">
    <p>Copyright 2019 &copy; Acme</p>
  </footer>

</body>
</html>