<!-- resources/views/lessons/create.blade.php -->
@extends('layouts.app')
<style>
        body {
            /* display: flex; */
            align-items: center;
            justify-content: center;
            height: 100px;
            margin: 0;
        }

        .lesson-form-container {
            width: 100%;
            max-width: 600px;
            margin-left: 350px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-row {
            /* display: flex; */
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            margin-right: 10px; /* Adjust the spacing between form groups */
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Adjust styles for smaller screens */
        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
            }

            .form-group {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>

@section('content')
    <div class="lesson-form-container">
        <h1>Create a New Lesson</h1>

        <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" required>
                </div>

                <div class="form-group">
                    <label for="instructor">Instructor:</label>
                    <input type="text" name="instructor" required>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" name="price" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label for="documents">Documents:</label>
                    <input type="file" name="documents">
                </div>

                <div class="form-group">
                    <label for="videos">Videos:</label>
                    <input type="file" name="videos">
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description"></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Create Lesson</button>
            </div>
        </form>
    </div>

 
@endsection
