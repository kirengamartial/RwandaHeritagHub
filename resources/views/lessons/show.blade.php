<!-- resources/views/lessons/show.blade.php -->
@extends('layouts.app')
<style>
    body {
        font-family: 'Arial', sans-serif;
        /* display: flex; */
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .lesson-details-container {
        display: flex;
        max-width: 1280px;
        width: 1280px;
        height: 475px;
        padding-right: 60px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .left-side {
        background-color: #333;
        color: #fff;
        padding: 20px;
        min-width: 150px;
        text-align: center;
        margin-right: 50px;
    }

    .menu-item {
        cursor: pointer;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .menu-item:hover {
        background-color: #555;
    }

    .right-side {
        flex: 1;
        padding: 20px;
    }

    .content {
        display: none;
    }

    h1 {
        color: #333;
    }

    img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    /* Additional styles for documents and reviews */
    h2 {
        color: #333;
        margin-bottom: 10px;
    }

    a.download-link {
        display: block;
        padding: 10px;
        background-color: #4285f4;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
    }

    a.download-link:hover {
        background-color: #3367d6;
    }
    
</style>
@section('content')

<div class="lesson-details-container">
    <div class="left-side">
        <div class="menu-item" id="course" onclick="showContent('course')">Course</div>
        <div class="menu-item" id="about" onclick="showContent('about')">About</div>
        <div class="menu-item" id="content" onclick="showContent('content')">Content</div>
        <div class="menu-item" id="reviews" onclick="showContent('reviews')">Reviews</div>
    </div>

    <div class="right-side">
       
    <h1>{{ $lesson->title }}</h1>
        <p>Instructor: {{ $lesson->instructor }}</p>
        <div id="course-content" class="content">
            
            <!-- Video content goes here -->
            <video width="600" height="300" controls>
                <source src="{{ asset('storage/' . $lesson->videos) }}" type="video/mp4">
               
            </video>
        </div>

        <div id="about-content" class="content" style="display: none;">
            <!-- Display lesson description or about content -->
            <p>{{ $lesson->description }}</p>
        </div>

        <div id="content-content" class="content" style="display: none;">
            <!-- Display documents -->
            @if ($lesson->documents)
                <h2>Documents</h2>
                <a href="{{ asset('storage/' . $lesson->documents) }}" download class="download-link">Download Documents</a>
            @else
                <p>No documents available for this lesson.</p>
            @endif
        </div>

        <div id="reviews-content" class="content" style="display: none;">
            <!-- Display reviews -->
            <h2>Reviews</h2>
             <p>reviews</p>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                EduTech Explorer
            </div>
           
            <div class="footer-social">
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="bx bxl-facebook"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="bx bxl-twitter"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="bx bxl-linkedin"></i></a>
                <!-- Add other social icons as needed -->
            </div>
        </div>
    </div>
</footer>
<script>
    function showContent(contentType) {
        // Hide all content divs
        document.querySelectorAll('.content').forEach(function (element) {
            element.style.display = 'none';
        });

        // Show the selected content div
        document.getElementById(contentType + '-content').style.display = 'block';
    }
</script>

@endsection
