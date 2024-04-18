<!DOCTYPE html>
<html>
<head>
    <title>update Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>update Student</h1>
        <form method="post" action="/students/{{ $student -> id }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="namel" name="name"  value="{{ $student -> name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student -> email }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"  value=" {{ $student -> password }}">
            </div>
            <div class="form-group">
                <label for="password">instractor_name</label>
                <input type="text" class="form-control" id="password" name="password"  value=" {{ $student -> user_id}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
