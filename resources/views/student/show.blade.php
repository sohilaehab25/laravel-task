<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>User</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>{{ $student['id'] }}</td>
                        <td>{{ $student['email'] }}</td>
                        <td>{{ $student['password'] }}</td>
                        
                    </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
