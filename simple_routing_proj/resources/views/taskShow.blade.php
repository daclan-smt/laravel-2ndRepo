<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Show Task</h1>
    <a href="{{ route('tasks.edit', $fetchedRecord->id) }}">Edit Task</a> <!-- Update route reference -->
    <ul>
        <li>{{ $fetchedRecord->title }} - {{ $fetchedRecord->description }}</li> <!-- Use fetchedRecord properties -->
    </ul>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>