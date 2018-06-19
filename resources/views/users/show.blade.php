<!DOCTYPE html>
<html>
    <head>
        <title>{{ $user->name }}</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('users.index') }}">Users</a>
                </div>
            </nav>

            <h1>Showing {{ $user->name }}</h1>

            <div class="jumbotron">
                <h2>{{ $user->name }}</h2>
                <p>
                    <strong>Email:</strong> {{ $user->email }}<br>
                    <strong>Phone:</strong> {{ $user->phone }}<br>
                    <strong>Password:</strong> {{ $user->password }}
                </p>
            </div>


            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>

        </div>
    </body>
</html>
