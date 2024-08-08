<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Task List</h1>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <!-- Search Form -->
        <form method="GET" action="{{ route('tasks.index') }}">
            <input type="text" name="search" placeholder="Search tasks..." value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>

        <!-- Task list -->
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No tasks found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Add task form -->
        <h2>Add New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
            
            <button type="submit">Add Task</button>
        </form>

        <!-- Pagination controls -->
        <div class="pagination">
            {{ $tasks->links() }}
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>