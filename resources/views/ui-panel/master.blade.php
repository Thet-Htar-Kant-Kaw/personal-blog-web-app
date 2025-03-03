<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CUSTOM CSS  -->
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- FONTAWESOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <title>Portfolio</title>
</head>
<body>
    <div style="width: 100%;">
        <div class="row">
            <div class="col-md-12">
                <!-- HEADER SECTION -->
                <div class="header">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <img src="images/thkk.jpg" id="header-img" alt="">
                        </div>
                        <div class="col-md-4 fs-4 fw-bold">
                            <br><br>
                            <p>Hello!</p>
                            <p>I'm Thet Htar</p>
                            <p>Nice to meet you <3</p>
                            <a href="posts.html">
                                <button 
                                    class="btn explore-btn fs-4 fw-bold" 
                                >
                                    Explore My Blogs
                                </button>
                            </a>                            
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <!-- NAVIGATION SECTION  -->
                <div id="navbar" class="d-flex justify-content-center position-sticky">
                    <a href="index.html">HOME</a>
                    <a href="#about">ABOUT</a>
                    <a href="#projects">SKILLS</a>
                    <a href="#blogs">BLOG</a>
                    @if (Auth::check())
                        <a 
                            href="#" 
                            onclick="event.preventDefault(); if(confirm('Are you sure you want to log out?')) {document.getElementById('logout-form').submit()}"
                        >
                            LOGOUT
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                        <a href="#">
                            {{ strToUpper(Auth::user()->name) }}
                        </a>
                    @else
                        <a href="{{ url('/login')}}">LOGIN</a>
                        <a href="{{ url('/register')}}">REGISTER</a>
                    @endif
                </div>

                <!-- ABOUT SECTION -->
                <!-- <div> -->
                    <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                            
                            <!-- FOOTER SECTION -->
                            <div class="footer py-3">
                            <div class="row">
                                <div class="col-md-4 px-5 mb-2">
                                    <h5>ABOUT THIS WEBSITE</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quisquam, voluptates. Quisquam, voluptates.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                                <div class="col-md-4 px-5 mb-2">
                                    <h5>CONTACT INFO</h5>
                                    <p>
                                        Mobile: 09770850557<br>
                                    </p>
                                    <p>
                                        Email: thethtarkantkaw95@gmail.com
                                    </p>
                                </div>
                                <div class="accounts col-md-4 px-5 fs-4">
                                    <h5>FOLLOW ME ON</h5>
                                    <a href="">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CUTOM JAVASCRIPT -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>