<!doctype html>
<html lang="es">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Sistema bajo plataforma web para el control de  asistencia del personal del Tribunal Electoral de Potosí">
        <meta name="author" content="Ing. Jorge Peralta">
        <meta name="keyword" content="Sistema bajo plataforma web para el control de asistencia del personal del Tribunal Electoral de Potosí">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TED - POTOSÍ</title>

        <link rel="shortcut icon" href="{{ asset('/img/ted.png') }}" />

       <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="login-page sidebar-collapse">
    <div id="app">
        <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg"  >
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url('/') }}">
                               <b> TED - POTOSÍ </b>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="true" aria-label="Toggle navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="navbar-toggler-icon"></span>
                      <span class="navbar-toggler-icon"></span>
                      <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" > <i class="material-icons">unarchive</i> INGRESAR</a>
                            </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="#" > <i class="material-icons">groups</i> PERSONAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" > <i class="material-icons">qr_code_2</i>ESCANERAR QR</a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="material-icons">contacts</i> {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-with-icons">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="material-icons">logout</i> {{ __('Salir') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">

            <!--<main class="py-4"> </main>-->
                @yield('content')


            <footer class="footer">
                <div class="container">
                    <nav class="float-left">
                        <ul>
                            <li>
                               <a>
                                TED
                               </a>
                            </li>
                            <li>
                               <a>
                                -
                               </a>
                            </li>
                            <li>
                               <a>
                                2021
                               </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                    <b> Create By &copy; Mentrax lo</b>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}" ></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>


  <script>
    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</html>
