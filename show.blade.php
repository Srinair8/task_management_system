<!DOCTYPE html>
<html>
<head>
    <title>Show Task</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Task Details</h1>

        <!-- Display task details -->
        <div class="task-details">
            <p><strong>Title:</strong> {{ $task->title }}</p>
            <p><strong>Description:</strong> {{ $task->description }}</p>
            <p><strong>Status:</strong> {{ $task->status }}</p>
        </div>

        <!-- Back to task list -->
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Task List</a>
    </div>
</body>
</html>
