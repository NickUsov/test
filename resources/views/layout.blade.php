<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Marat test</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  @livewireStyles
</head>

<body>

  <!-- Start your project here-->
  
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
        <a href="#" class="navbar-brand waves-effect"><strong class="blue-text"><i class="fa fa-paw mr-3"></i></strong></a>
        <button type="button" data-toggle="collapse" data-target="
        #navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
        <span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="/" class="nav-link waves-effect">Home</a>
            </li>
            @if(Auth::check() && !Auth::user()->isFull())
            <li class="nav-item">
              <a href="/create" class="nav-link waves-effect">New post</a>
            </li>
            @endif
            
          </ul>

          <ul class="navbar-nav nav-flex-icon">
                @if(Auth::check())
                <li class="nav-item mr-2 pt-2"><span>Welcome, {{Auth::user()->email}}</span></li>
                @endif
               
                @if(Auth::check())
                <li class="nav-item mr-2"><a href="/logout" class="nav-link border border-light rounded waves-effect">Sign out</a></li>
                @else
                <li class="nav-item mr-2"><a href="/register" class="nav-link border border-light rounded waves-effect">Sign up</a></li>
                <li class="nav-item mr-2"><a href="/login" class="nav-link border border-light rounded waves-effect">Sign in</a></li>
                @endif
          </ul>
        </div>
      </div>
    </nav>

  <main class="mt-5 pt-5">
  @yield('content')
  </main>

  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <script>
    new WOW().init();
  </script>
  @livewireAssets 
</body>

</html>