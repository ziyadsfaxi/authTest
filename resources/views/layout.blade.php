<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('users.index') }}">Users</a>
            </div>
        </nav>
        <div class="container">


            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <div class="container">
                @yield('content')
            </div>

        </div>


        <hr>
        <footer class="text-center">All Copy rights reserved &copy;</footer>
    </body>
</html>
