<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">

    <title>@yield('judul')</title>
  </head>
  <body>

  	<!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 13px;">
	<div class="container">
		<a class="navbar-brand" href="{{url('/')}}">SUVIS INDONESIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cara Memesan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tentang Suvis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/transaksi')}}">Transaksi</a>
      </li>
   <!--    <li class="nav-item">
        <a class="nav-link" href="#">Checkout</a>
      </li> -->

      <li class="nav-item dropdown">
        @if(session()->has('SessionPublic'))
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{session()->get('SessionNama')}}
        </a>
        @else
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Akun
        </a>
        @endif

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(session()->has('SessionPublic'))
          <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
          @else
          <a class="dropdown-item" href="{{url('/login')}}">Login</a>
          <a class="dropdown-item" href="{{url('/daftar')}}">Daftar</a>
          @endif
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
  	<!-- AKHIR NAVBAR -->

