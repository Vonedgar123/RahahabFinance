<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Rahahab Finance') | Rahahab Finance</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="/js/app.js"></script>
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <a class="btn btn-primary" href="#signup">Sign Up</a>
            </div>
        </nav>
        <!-- Masthead-->
        @yield('content')


    <main role="main" class="inner cover">

    </main>
</body>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright Â© Rahahab Finance  {{ date("Y") }}
            </p>
        </div>
    </footer>
</html>
