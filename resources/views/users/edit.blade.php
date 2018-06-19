@extends('layout')

@section('title', "Edit $user->name")

@section('content')

    <h1>Edit {{ $user->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {{ Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', $user->email, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', $user->phone, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirm', 'Password Confirm') }}
            {{ Form::password('password_confirm', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Update!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection

