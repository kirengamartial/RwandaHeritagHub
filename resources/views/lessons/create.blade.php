<!-- resources/views/lessons/create.blade.php -->
@extends('layouts.app')
<style>
        .lesson-edit-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
@section('content')
    <div class="lesson-edit-container">
        <h1>Create a New Lesson</h1>

        <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="image_url">Image URL:</label>
                <input type="text" id="image_url" name="image_url">
            </div>

            <div class="form-group">
                <label for="documents">Documents:</label>
                <input type="file" id="documents" name="documents">
            </div>

            <div class="form-group">
                <label for="video_url">Video URL:</label>
                <input type="text" id="video_url" name="video_url">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Lesson</button>
            </div>
        </form>
    </div>

  

@endsection
