<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Buku Tamu</title>

  @vite(['resources/js/app.js'])
</head>
<body>
  <h1>Dashboard Buku Tamu</h1>

  <nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('buku-tamu') }}">Buku Tamu</a> |
    <a href="{{ route('about') }}">About</a>
  </nav>

  <hr>

  <div>
    @yield('content')
  </div>
</body>
</html>
