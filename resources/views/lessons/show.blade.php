@extends('layouts.app')

<style>
    body {
        font-family: 'Arial', sans-serif;
        display: flex;
        flex-direction: column; /* Make body a flex container */
        min-height: 100vh; /* Ensure body takes at least the full viewport height */
        margin: 0;
    }

    .lesson-details-container {
        display: flex;
        flex: 1; /* Allow .lesson-details-container to grow and take remaining space */
        max-width: 1280px;
        width: 100%;
        min-height: 388px; /* Make .lesson-details-container at least the full viewport height */
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
        overflow-y: auto;
        min-height: 100%; /* Allow .left-side to take full height */
    }

    .watch-button {
        display: inline-block;
        margin-top: 10px;
        background-color: #4285f4;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .watch-button:hover {
        background-color: #3367d6;
    }

    .watch-button button {
        background: none;
        border: none;
        color: inherit;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
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

    /* Footer styles */
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-logo {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .footer-social a {
        color: #fff;
        font-size: 1.5rem;
        margin-right: 10px;
    }
</style>

@section('content')

<div class="lesson-details-container">
    <div class="left-side">
        <div class="menu-item" id="course" onclick="showContent('course')">Exhibit</div>
        <div class="menu-item" id="about" onclick="showContent('about')">About</div>
        <div class="menu-item" id="content" onclick="showContent('content')">Content</div>
        <div class="menu-item" id="reviews" onclick="showContent('reviews')">Reviews</div>
    </div>

    <div class="right-side">
        <h1>{{ $lesson->title }}</h1>

        <div id="course-content" class="content">
            <!-- Video content goes here -->
            <a class="watch-button" href="https://www.youtube.com/watch?v=eB6txyhHFG4" target="_blank">
                <button > Watch {{ $lesson->title}} on YouTube</button>
            </a>
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

<!-- Footer section -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                Rwanda Heritage Hub
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
    // Simulate click on "course" when the page loads
    document.addEventListener("DOMContentLoaded", function () {
        showContent('course');
    });

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
