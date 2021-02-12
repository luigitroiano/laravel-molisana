<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
  <header>
    <div class="logo">
      <img src=" {{ asset('img/logo.png') }}" alt="">
    </div>
    <nav>
      <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}">Home</a>
      <a href="{{ route('products') }}" class=" {{ Route::currentRouteName() === 'products' ? 'active' : ''}}">Products</a>
      <a href="{{ route('contact-us') }}" class=" {{ Route::currentRouteName() === 'contact-us' ? 'active' : ''}}">Contact</a>
    </nav>
  </header>
  @yield('main')
  


</body>

</html>