<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Styles -->

</head>

<body>
  <header>
    <div>
      <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <nav>
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('products') }}">Products</a>
      <a href="{{ route('contact-us') }}">Contact</a>
    </nav>
  </header>
  @yield('main')


</body>

</html>