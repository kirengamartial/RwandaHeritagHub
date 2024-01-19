@extends('layouts.app')

@section('content')
<div id="hero" style="background-image:linear-gradient(rgba(0, 0, 0, 0.699),rgba(0, 0, 0, 0.699)),url('http://www.visitrwanda.com/wp-content/uploads/fly-images/3132/Visit-Rwanda-NH_OO_Landscape_Kings_Palace_0470_MASTER-1920x1280.jpg');">
    <div class="container1">
        <h2>Welcome to Rwanda Heritage Hub</h2>
        <p>Explore the Rich Cultural Heritage of Rwanda</p>
        <a href="{{url('/home')}}" class="btn">Explore</a>
    </div>
</div>

<section id="what-we-offer">
    <div class="container">
        <h2>What We Offer</h2>
        <div class="separate">
        <div class="project-overview">
            <h3>Project Overview</h3>
            <p>The Rwanda Heritage Hub Interactive Virtual Museum is a comprehensive web application designed to offer users an immersive experience into Rwandan history, traditions, and cultural artifacts. The platform aims to provide a rich, educational, and interactive journey through the country's heritage.</p>
        </div>
        <div class="features">
            <h3>Features</h3>
            <ul>
                <li>Utilize 3D modeling to recreate Rwandan artifacts, historical sites, and cultural items.</li>
                <li>Each exhibit will offer detailed and curated information about the significance of the items, providing users with a comprehensive understanding.</li>
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


    @endsection
