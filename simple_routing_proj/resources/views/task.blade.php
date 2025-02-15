<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
    
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }} - {{ $task->description }} 
                <a href="{{ route('tasks.show', $task->id) }}">View Task</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>
</html>