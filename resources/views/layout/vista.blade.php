<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
	
	<title>@yield('title')</title>
</head>
<body class="endlessfont endless-bg-light">

  <nav class="navbar navbar-expand-md navbar-light">
   <img src="{{ asset('img/logo/logo.png') }}" width="75px" height="75px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse float-right" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto w-100 justify-content-end text-center">
        <li class="nav-item">
          <a class="nav-link @if(Request::path() == '/') text-current @endif" href="{{ url('') }}"><b>HOME</b><!--<span class="sr-only">(current)</span>--></a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(str_contains(Request::path(), 'noticias')) text-current @endif" href="{{ url('noticias') }}"><b>NOTICIAS</b><!--<span class="sr-only">(current)</span>--></a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::path() == 'olympus-heir') text-current @endif" href="{{ url('olympus-heir') }}"><b>OLYMPUS' HEIR</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Request::path() == 'nosotros') text-current @endif" href="{{ url('nosotros') }}"><b>NOSOTROS</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="@if(Request::path() != '/') {{ url('/#contacto') }} @else #contacto @endif"><b>CONTACTO</b></a>
        </li>
      </ul>
    </div>
  </nav>

  @yield('carousel')

  @yield('content')

    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>