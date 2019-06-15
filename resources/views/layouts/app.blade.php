<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Acme</title>
</head>
<body>
  <!-- Renders HTML wrapped in section('content') -->
  @yield('content')

  <!-- Include sidebar.blade file in views/inc. 
  Both include and extend look in the views folder. -->
  @include('inc.sidebar')

</body>
</html>