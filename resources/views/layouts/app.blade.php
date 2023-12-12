<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EduTech</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    
    <style>

       * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  list-style: none;
  text-decoration: none;
  scroll-behavior: smooth;
  scroll-padding-top: 3rem;
  
}
.navbar {
    margin-top: 0;
    padding: 13px 0px;
    background-color: #333 !important;
}
.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; /* Adjust the z-index as needed */
}
.login1 {
    margin-top: 70px;
}
/* Add this to your existing styles or your styles.css file */
.btn-login,
.btn-forgot-password {
    padding: 10px 20px; /* Equal padding for both buttons */
    margin-right: 10px; /* Add margin between buttons */
    background-color: #333; /* Set the background color */
    color: #fff; /* Set the text color */
    border: none; /* Remove border */
    border-radius: 5px; /* Add border-radius for rounded corners */
    cursor: pointer;
    text-decoration:none;
}
.btn-forgot-password {
    padding: 20px;
}


.btn-login:hover,



.btn-forgot-password:hover {
    background-color: #333333f5; /* Change the background color on hover */
}


.container .navbar-brand {
    color: #fff !important;
    font-size: 15px;
}
.container .navbar-nav .nav-item .nav-link{
    color: #fff !important;
}
.tp {
    margin-top: -25px;
    line-height: 7vh;
}
.tp #hero {
    background-image: linear-gradient(rgba(0, 0, 0, 0.699), rgba(0, 0, 0, 0.699)), url('img/king.jpg');
    background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
    height: 90vh; /* Adjust the height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff; /* Set the text color to white */
    text-align: center;
}
.tp #hero .container1 p{
    color: #F5F5F5DC;
    font-size: 17px;
}
.tp #hero .container1 h2 {
    color: #fff;
    font-size: 50px;
    font-weight: 700;
}
.tp #hero .container1 .btn:hover {
    background: #f5f5f55a !important;
}


/* public/css/styles.css */

.container2 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-top: 20px;
    justify-content: space-between; /* Center items horizontally */
    align-items: center; /* Center items vertically */
    margin-left: 70px;
    width: 90%;
    margin-bottom: 50px;
}

.lesson-card {
    border: 1px solid #ddd;
    text-align: center;
    text-decoration: none; /* Remove default link underline */
    color: inherit; /* Inherit the text color from the parent */
    display: flex;
    flex-direction: column;
    overflow: hidden; /* Hide overflowing content */
    height: 300px; /* Set a fixed height for the cards */
}

.lesson-card:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.image-container {
    flex-grow: 1; /* Allow the image to grow and take available space */
    position: relative; /* Ensure relative positioning for absolute child */
}

.lesson-card img {
    width: 100%;
    height: 150px; /* Set a fixed height for the images */
    object-fit: cover; /* Cover the container while maintaining aspect ratio */
} 
.lesson-card h4 {
    font-size: 16px;
    margin-top: 12px;
}

.text-center {
    margin-top: 29px;
    margin-bottom: 27px;
    text-align: center;
}
.dashboard-link {
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
        margin-bottom: 5px;
    }


#what-we-offer {
    background-color: #f9f9f9;
    padding: 50px 0;
}

#what-we-offer .container {
    text-align: center;
}

#what-we-offer h2 {
    color: #333;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 60px;
}

#what-we-offer h3 {
    color: #333333df;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
}

#what-we-offer p {
    color: #555;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
}

#what-we-offer ul {
    list-style-type: none;
    padding: 0;
}

#what-we-offer li {
    color: #555;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
}

.separate {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}

.project-overview,
.features {
    width: calc(48% - 20px); /* Adjust the width and margin as needed */
    margin-bottom: 40px;
    padding: 20px;
   
   
}

.project-overview h3,
.features h3 {
    color: #333;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}

.project-overview p {
    color: #555;
    font-size: 16px;
    line-height: 1.5;
}

.features ul {
    margin-left: 20px;
}

.features li {
    color: #555;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 10px;
}
/* Add this to your existing styles or your styles.css file */
footer {
    background-color: #333;
    color: #fff;
    padding: 30px 0;
    margin-bottom: -30px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.footer-logo {
    font-size: 24px;
    font-weight: 700;
}

.footer-links {
    margin-top: 10px;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
    margin-right: 20px;
}

.footer-links a:hover {
    color: #f5f5f5;
}

.footer-social {
    margin-top: 10px;
}

.footer-social a {
    color: #fff;
    text-decoration: none;
    margin-right: 15px;
    font-size: 20px;
}

.footer-social a:hover {
    color: #f5f5f5;
}

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   EduTech Explorer
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
   
              
      <ul class="navbar-nav ms-auto">
   
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="/home">Courses</a>
        </li>
    </ul>
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if(Auth::user()->isTeacher)
                        <!-- If user is a teacher, show the link -->
                        <a class="dropdown-item dashboard-link" href="/lessons/create">
                            Add Lesson
                        </a>
                    @endif

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
            </div>
        </nav>

        <main class="py-4 tp">
            @yield('content')
        </main>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
            const header = document.querySelector('.navbar');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    });
</script>

</body>
</html>
