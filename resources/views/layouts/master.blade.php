<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('assets/img/logo_64x64.png') }}" type="image/png"/>

    <link href="{{ elixir('assets/css/app.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="top"></div>

<div id="app">
    
    <div id="sidebar">
        @include('includes.sidebar')
    </div>

    <div class="sidebar-toggle-wrapper hidden-lg-up">
        <a href="#" class="sidebar-toggle">
            <i class="fa fa-bars fa-margin-right hidden-lg-up"></i> Menu
        </a>
    </div>

    <div id="main">

        @yield('content')
        @include('includes.footer')
        
    </div>

</div>

<script src="{{ elixir('assets/js/dependencies.js') }}"></script>
<script src="{{ elixir('assets/js/app.js') }}"></script>

</body>
</html>