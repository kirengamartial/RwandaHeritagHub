@extends('layouts.app')

@section('content')
<div id="hero" style="background-image:linear-gradient(rgba(0, 0, 0, 0.699),rgba(0, 0, 0, 0.699)),url('img/king.jpg');">
    <div class="container1">
        <h2>Welcome to EduTech Explorer</h2>
        <p>Explore a world of knowledge with our innovative educational technology.</p>
        <a href="{{url('/home')}}" class="btn">Learn More</a>
    </div>
</div>

<section id="what-we-offer">
    <div class="container">
        <h2>What We Offer</h2>
        <div class="separate">
        <div class="project-overview">
            <h3>Project Overview</h3>
            <p>"EduTech Explorer" is an online platform designed to connect students, educators, and lifelong learners with a wide variety of educational resources, including courses, tutorials, and learning materials...</p>
        </div>
        <div class="features">
            <h3>Features</h3>
            <ul>
                <li>User Registration and Login: Users can create accounts and log in to access additional features like saving favorite courses and tracking their progress.</li>
                <!-- Add other features here -->
            </ul>
        </div>
        </div>
    </div>
</section>

<!-- Add this to your existing content section -->
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


    @endsection
