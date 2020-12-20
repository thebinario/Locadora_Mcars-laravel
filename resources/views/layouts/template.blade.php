<style>
    *{
        margin: 0;
        padding: 0;

    }
    nav {
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
        background-color: rgba(238, 129, 4, 0.938);
        color: white;
        text-align: center;

        font-size: 1.8em;
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 80px;
        background-color: rgb(46, 47, 45);
        color: white;
        text-align: center;

        font-size: 1.1em;
    }



</style>


<html>

<head>
    <title>@yield('title')</title>
</head>

<body>
    @section('sidebar')
        @include('layouts.navbar')
    @show

    @yield('content')
    @yield('content-form')


    <footer>
        Locadora MCars <br />
        Desenvolvido por: Abimael Ferreira
    </footer>
</body>

</html>
