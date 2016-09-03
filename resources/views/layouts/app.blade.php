<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Banco de Questões</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
    <script>
        var root = '{{url('/')}}'
    </script>
    
</head>
<body id="app-layout" data-ng-app="question" data-ng-controller="QuestionController" data-ng-init='init()'>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <button type="button" class="btn btn-danger new-question" ng-click="new()" data-toggle="modal" data-target="#newQuestion">
                  Novo
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('root') }}">
                    {{-- <img src="{{ asset('img/logo.png') }}" alt="LabVida"> --}}
                    Banco de questões
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>
                
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('root') }}">Categorias</a></li>
                    <!-- Authentication Links -->
                    {{-- @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="container body-container">
        @yield('content')
        <hr />
        <footer>
            <p class="text-center">Banco de Questões &copy; {{ date('Y') }} </p>
        </footer>
    </div>


</body>
</html>
