<!DOCTYPE html>
<html>
<head>
    <title>Greet Page</title>
</head>
<body>
    <h1>Hello, {{ $name }}!</h1>
    <a href="{{ route('tasks.index') }}">Go to Tasks</a>
</body>
</html>