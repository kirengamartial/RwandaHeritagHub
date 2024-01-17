<!-- resources/views/lessons/index.blade.php -->

@extends('layouts.app')

<style>
        .lesson-list-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Ensure the table is responsive and won't overflow */
        .table-responsive {
            overflow-x: auto;
        }
    </style>
@section('content')
    <div class="lesson-list-container">
        <h1>Lesson List</h1>

        <a href="{{ route('lessons.create') }}" class="btn btn-primary mb-3">Create New Lesson</a>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->title }}</td>
                            <td>
                                <a href="{{ route('lessons.edit', ['id' => $lesson->id]) }}" class="btn btn-secondary btn-sm">Update</a>
                                <form action="{{ route('lessons.destroy', ['id' => $lesson->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No lessons available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

   
@endsection
