@extends('layouts.app')

@section('content')
   <div class="container mt-4">
        <h1>User List</h1>
        <td><a href="/students/create" class="btn btn-dark">Add Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Instractor</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>

                @foreach($student as $student)
                    <tr>
                        <td>{{ $student['id'] }}</td>
                        <td>{{$student->name}}</td>
                        <td>{{ $student['email'] }}</td>
                        <td>{{ $student['password'] }}</td>
                        <td>{{ $student-> user -> name}}</td>
                        <td>
                            <form action="/students/{{ $student['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td><a href="/students/{{ $student['id'] }}/update" class="btn btn-primary">Edit</a>
                        <td><a href="/students/{{ $student['id'] }}" class="btn btn-primary">show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
