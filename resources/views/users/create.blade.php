@extends('layout')

@section('title', 'Create User')

@section('content')

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
@endsection
