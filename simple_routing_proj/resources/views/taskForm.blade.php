<!DOCTYPE html>
<html>
<head>
    <title>Task Form</title>
</head>
<body>
    @if(isset($fetchedRecord))
        <form method="POST" action="{{ route('tasks.update', $fetchedRecord->id) }}">
            @csrf
            @method('PUT')
    @else
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
    @endif

        <input type="text" name="title" value="{{ $fetchedRecord->title ?? '' }}" required>
        <input type="text" name="description" value="{{ $fetchedRecord->description ?? '' }}" required>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>