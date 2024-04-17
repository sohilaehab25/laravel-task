<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>User List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th> <!-- Changed from 'delete' to 'Action' -->
                </tr>
            </thead>
            <tbody>

                @foreach($students as $student)
                    <tr>
                        <td>{{ $student['id'] }}</td>
                        <td>{{ $student['email'] }}</td>
                        <td>{{ $student['password'] }}</td>
                        <td>
                            <form action="/students/{{ $student['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td><a href="/students/{{ $student['id'] }}/update" class="btn btn-primary">Edit</a>
                        <td><a href="/students/{{ $student['id'] }}" class="btn btn-primary">show</a>
                        <!-- <td><a href="/students/{{ $student['id'] }}" class="btn btn-danget">delete</a> -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
