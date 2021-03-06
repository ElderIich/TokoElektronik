<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Octonic</title>

    <!-- <link href="/res/css/main.css" rel="stylesheet">
    <link href="/res/css/responsive.css" rel="stylesheet">
    <link href="/res/css/bootstrap.min.css" rel="stylesheet">
    <link href="/res/css/font-awesome.min.css" rel="stylesheet">
    <link href="/res/css/prettyPhoto.css" rel="stylesheet">
    <link href="/res/css/price-range.css" rel="stylesheet">
    <link href="/res/css/animate.css" rel="stylesheet">
    <link href="/res/css/style.css" rel="stylesheet"> -->

    <link href="{{ URL::asset('css/main.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/font-awesome.min.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/prettyPhoto.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/price-range.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/animate.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }} " rel="stylesheet">

  </head>
  <body>

    <div id="header1">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">FED</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header2-support-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-lock"></i> Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div id="header2">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

          <div class="collapse navbar-collapse" id="header2-support-content">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Produk
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Tv</a>
                  <a class="dropdown-item" href="#">Kulkas</a>
                  <a class="dropdown-item" href="#">Blender</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-1" >
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </div>
    <!-- END HEADER -->
