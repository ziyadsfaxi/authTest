<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('users.index') }}">Users</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('users.index') }}">View All Users</a></li>
                </ul>
            </nav>

            <h1>Create a User</h1>

            <!-- if there are creation errors, they will show here -->
            {{ Html::ul($errors->all()) }}

            {{ Form::open(['route' => 'users.store', 'method' => 'POST']) }}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('phone', 'Phone') }}
                    {{ Form::text('phone', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password_confirm', 'Password Confirm') }}
                    {{ Form::password('password_confirm', null, ['class' => 'form-control']) }}
                </div>

                {{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </body>
</html>
