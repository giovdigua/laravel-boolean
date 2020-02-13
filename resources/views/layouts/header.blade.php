<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico" type="image/x-icon">
    <!-- CSS & Font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- JS -->
    <script src="{{ asset('/js/app.js') }}"></script>
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand" href="#"><img src="{{ asset('/images/logo.png') }}" alt="Logo Boolean"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active':'' }}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'corso' ? 'active':'' }}" href="{{ route('corso') }}">Corso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dopo il corso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lezione gratuita</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-success my-2 my-sm-0" type="submit">Candidati ora</button>
    </form>
  </div>
</nav>
    
