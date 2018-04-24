<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Parroquia Basilica del Corazón de María</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Sanjudas.cl</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ asset('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('parroquia')}}">Parroquia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('quienesSomos')}}">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('contacto')}}">Contactanos</a>
            </li>
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{ asset('usuarios')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ asset('usuarios/nuevo')}}">Nuevo</a>
                    <a class="dropdown-item" href="{{ asset('usuarios')}}">listar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ asset('usuarios/buscar')}}">Buscar</a>
                  </div>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <a class="btn btn-sm btn-outline-secondary mr-3" href="{{ asset('register')}}">Register</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ asset('login')}}">Sign up</a>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">