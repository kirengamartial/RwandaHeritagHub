@extends('layouts.app')

<style>
    .container1 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 40px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        text-decoration: none;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column; /* Stack children vertically */
    }

    .card1 {
        text-decoration: none;
        color: #212529;
        display: flex;
        flex-direction: column; /* Stack children vertically */
    }

    .card img {
        width: 100%;
        height: 150px;
    }

    .card-body {
        padding: 20px;
        display: flex;
        flex-direction: column; /* Stack children vertically */
        align-items: center; /* Center items horizontally */
        text-align: center; /* Center text */
    }

    .card-title {
        font-size: 1.0rem;
        margin-bottom: 10px;
    }

    .btn {
        margin-top: auto; /* Push the button to the bottom of the card-body */
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    #searchInput {
        margin-bottom: 10px;
        padding: 8px;
        border: 1px solid #ddd;
        margin-left: 500px;
        margin-top: 20px;
        height: 40px;
        margin-bottom: 20px;
        border-radius: 4px;
    }

    #clearButton {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 0.4px 16px;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 10px;
    }

    #clearButton:hover {
        background-color: #0056b3;
    }

    footer {
        /* Your existing styles for the footer */
    }
</style>

@section('content')
    <input type="text" id="searchInput" placeholder="Search lessons" oninput="searchLessons()">
    <button id="clearButton" onclick="clearSearch()">Clear</button>

    <div class="container1">
        @foreach($lessons as $lesson)
            <div class="card" data-title="{{ strtolower($lesson->title) }}" data-instructor="{{ strtolower($lesson->instructor) }}">
                <a href="{{ route('lessons.show', ['id' => $lesson->id]) }}" class="card1">
                    <img src="{{ $lesson->image_url }}" alt="{{ $lesson->title }}">
                    <div class="card-body">
                        <h1 class="card-title">{{ $lesson->title }}</h1>
                        <button class="btn btn-success"><i class='bx bx-book-open'></i> View Details</button>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

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
        function searchLessons() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const lessons = document.querySelectorAll('.card');

            lessons.forEach(lesson => {
                const title = lesson.getAttribute('data-title');
                const instructor = lesson.getAttribute('data-instructor');

                if (title.includes(searchInput) || instructor.includes(searchInput)) {
                    lesson.style.display = 'flex';
                } else {
                    lesson.style.display = 'none';
                }
            });
        }

        function clearSearch() {
            document.getElementById('searchInput').value = '';
            searchLessons();
        }
    </script>
@endsection
