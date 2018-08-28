<!DOCTYPE html>
<html>
  <head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
  <header>
    <nav>
        <div class="navbar-fixed container" >
          <div class="nav-wrapper">
            <a href="/" class="brand-logo"><div class="flow-text">Ocean Noticias</div></a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="/">Home</a></li>
              <li><a href="{{route('noticias.cadastrar')}}">Cadastrar Noticias</a></li>
            </ul>
            <ul class="side-nav" id="mobile">
              <li><a href="/">Home</a></li>
              <li><a href="{{route('noticias.cadastrar')}}">Cadastrar Noticias</a></li>
            </ul>
          </div>
        </div>
    </nav>
  </header>
    
   
