@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-dark text-white">
        <h3 class="mb-0">🏠 Household Chores & Daily Activities</h3>
    </div>
    <div class="card-body">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">+ Add New Task</a>

    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Task Name</th>
                <th>Priority</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><strong>{{ $task->task_name }}</strong></td>
                <td>
                    <!-- Added text-dark here to make priority text black -->
                    <span class="badge text-dark bg-{{ $task->priority == 'High' ? 'danger' : ($task->priority == 'Medium' ? 'warning' : 'info') }}">
                        {{ $task->priority }}
                    </span>
                </td>
                <td>{{ $task->deadline }}</td>
                <td>
                    <span class="badge status-{{ str_replace(' ', '-', strtolower($task->status ?? '')) }}">
                        {{ $task->status }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-primary">Update</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this task?')">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
