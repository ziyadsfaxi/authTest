@extends('layout')

@section('title', 'Users')

@section('content')

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

                    {{ Form::open(array('route' => ['users.destroy', $value->id], 'method' => 'DELETE', 'class' => 'pull-right')) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
