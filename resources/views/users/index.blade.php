<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <!-- <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
                    <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
                </ul>
            </nav> -->

            <h1>Users</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <div class="above-table-container">
                <a class="btn btn-primary" href="{{ route('users.create') }}">Create</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>phone</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>

                        <td>
                            <a class="btn btn-small btn-success" href="{{ route('users.show', $value->id) }}">Show</a>

                            <a class="btn btn-small btn-info" href="{{ route('users.edit', $value->id) }}">Edit</a>

                            <a class="btn btn-small btn-danger" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </body>
</html>
