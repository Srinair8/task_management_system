<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Task</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $task->description }}</textarea>
            
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
            
            <button type="submit">Update Task</button>
        </form>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
