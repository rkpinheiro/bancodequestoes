<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title>MakeMyTest | Gerador de provas </title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ng-tags-input.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/angular.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ng-tags-input.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
    <script>
        var root = '{{url('/')}}'
    </script> 
    <style>
        tags-input .tags {
            display: block;
            width: 100%;
            padding: .5rem .75rem;
            font-size: 1rem;
            line-height: 1.25;
            color: #55595c;
            background-color: #fff;
            background-image: none;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.15);
            border-radius: .25rem;
        }
        tags-input .tags .tag-item {
            margin: 0; 
            padding: 0; 
            display: inline-block;
            float: left;
            font: inherit; 
            height: auto; 
            line-height: 1; 
            border: none; 
            border-radius: 0; 
            background: none; 
        }
        .tag-template .tag span{
            margin: 0 0 0 6px;
            top: 4px;
            position: relative;
        }
        .tag-template .tag button span{
            top: -3px;
            position: relative;
        }
        .btn-bottom {
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 70px;
        }
        .btn-bottom button {
            margin-top: 7px; 
        }
        .btn-circle {
          width: 30px;
          height: 30px;
          text-align: center;
          padding: 6px 0;
          font-size: 12px;
          line-height: 1.428571429;
          border-radius: 15px;
        }
        .btn-circle.btn-lg {
          width: 50px;
          height: 50px;
          padding: 10px 16px;
          font-size: 18px;
          line-height: 1.33;
          border-radius: 25px;
        }
        .btn-circle.btn-xl {
          width: 70px;
          height: 70px;
          padding: 10px 16px;
          font-size: 24px;
          line-height: 1.33;
          border-radius: 35px;
        }
    </style>   
</head>
<body id="app-layout" data-ng-app="question" data-ng-controller="QuestionController" data-ng-init='init()'>
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="{{route('root')}}">MakeMyTest <i class="fa fa-hand-peace-o" aria-hidden="true"></i></a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
            
        </li>
      </ul>
      <form class="form-inline pull-xs-right">
        <input class="form-control" type="text" placeholder="Buscar" ng-model="search">
      </form>        
    </nav>
    
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

    <div class="container-fluid body-container" style="padding-top: 70px">
        @yield('content')
        {{-- <hr />
        <footer>
            <p class="text-center">Banco de Questões &copy; {{ date('Y') }} </p>
        </footer> --}}
    </div>
    
    <div class="btn-bottom">
        <button type="button" class="btn btn-primary btn-circle btn-xl" ng-click="newTest()" data-toggle="modal" data-target="#test">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-warning btn-circle btn-xl" ng-click="allTag()" data-toggle="modal" data-target="#tags">
            <i class="fa fa-tags" aria-hidden="true"></i>
        </button>
        <button type="button" class="btn btn-danger new-question btn-circle btn-xl" ng-click="new()" data-toggle="modal" data-target="#newQuestion">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </button>        
    </div>

    @include('partials._new_question')
    @include('partials._edit_question')
    @include('partials._show_question')
    @include('partials._tags')
    @include('partials._test')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>
