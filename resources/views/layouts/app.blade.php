<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Banco de Questões</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/angular.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
    <script>
        var root = '{{url('/')}}'
    </script>
    <style>
        
    </style>
    
</head>
<body id="app-layout" data-ng-app="question" data-ng-controller="QuestionController" data-ng-init='init()'>
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="{{route('root')}}">MakeMyTest</a>
      <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item">
            <button type="button" class="btn btn-danger new-question" ng-click="new()" data-toggle="modal" data-target="#newQuestion">
              Novo
            </button>
        </li>
      </ul>
    </nav>
    
    {{-- <form class="form-inline pull-xs-right">
    <input class="form-control" type="text" placeholder="Buscar" ng-model="search">
    </form>  --}}       
    {{--            
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('root') }}">Categorias</a></li>
            <!-- Authentication Links -->
            @if (Auth::guest())
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
            @endif
        </ul>
    --}}        

    <div class="container-fluid body-container" style="margin-top: 70px">
        @yield('content')
        {{-- <hr />
        <footer>
            <p class="text-center">Banco de Questões &copy; {{ date('Y') }} </p>
        </footer> --}}
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>
