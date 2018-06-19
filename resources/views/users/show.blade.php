@extends('layout')

@section('title', "Show $user->name")

@section('content')

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
@endsection
