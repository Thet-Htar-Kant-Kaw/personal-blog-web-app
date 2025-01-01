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
                </div>

                <!-- ABOUT SECTION -->
                <!-- <div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- ABOUT ME AND MY SKILLS -->
                            <div class="about-me px-5">
                                <div class="row">
                                    <div class="col-md-5">
                                        <br>
                                        <div id="about">
                                            <h2 class="text-center">ABOUT ME</h2><br>
                                            <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia
                                                velit maiores quaerat. Sit cumque sapiente facere numquam, doloribus
                                                laboriosam fugiat molestiae! Veritatis, exercitationem earum ratione
                                                et error similique doloremque.
                                            </P>
                                            <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia
                                                velit maiores quaerat. Sit cumque sapiente facere numquam, doloribus
                                                laboriosam fugiat molestiae! Veritatis, exercitationem earum ratione
                                                et error similique doloremque.
                                            </P><br>
                                            <div class="row py-3 fs-4">
                                                <div class="col-md-6 mb-2">
                                                    <div class="total-project">
                                                        <i class="fa-solid fa-diagram-project pb-2"></i><br>
                                                        <strong>5</strong>
                                                        <p>Total Projects</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="total-student">
                                                        <i class="fa fa-users pb-2"></i><br>
                                                        <strong>100</strong>
                                                        <p>Total Students</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-7 px-5">
                                        <br>
                                        <h2 class="text-center">MY SKILLS</h2><br>
                                        <div class="row mb-4">
                                            <div class="col-md-10">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" style="width: 95%;">
                                                        95%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                HTML
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-10">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" style="width: 75%;">
                                                        75%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                CSS
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-10">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" style="width: 75%;">
                                                        75%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                LARAVEL
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-10">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" style="width: 55%;">
                                                        55%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                JAVASCRIPT
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-10">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" style="width: 40%;">
                                                        40%
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                REACT
                                            </div>
                                        </div>
                                                                                
                                    </div>
                                </div>                                
                            </div>

                            <!-- PROJECTS -->
                            <br>
                            <div class="projects px-5" id="projects">
                                <h2 class="text-center">MY PROJECTS</h2><br><br>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="project">
                                            <a href="https://www.google.com" target="_blank">
                                                <i class="fa-solid fa-diagram-project pb-2"></i><br>
                                                <strong>Google</strong>
                                            </a>
                                        </div>                                                                                
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="project">
                                            <a href="https://www.youtube.com" target="_blank">
                                                <i class="fa-solid fa-diagram-project pb-2"></i><br>
                                                <strong>YouTube</strong>
                                            </a>
                                        </div>                                                                                
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="project">
                                            <a href="https://www.youtube.com" target="_blank">
                                                <i class="fa-solid fa-diagram-project pb-2"></i><br>
                                                <strong>YouTube</strong>
                                            </a>
                                        </div>                                     
                                    </div>
                                </div>
                            </div>

                            <!-- BLOGS -->
                            <br><br>
                            <div class="latest-post px-5" id="blogs">
                                <h2 class="text-center">LATEST POSTS</h2><br><br>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-3 post">
                                        <a href="post-detail.html">
                                            <h5>HOW TO BE A PROFESSIONAL WEB DEVELOPER IN ONE YEAR</h5><br>
                                            <img src="images/post1.jpg" alt=""><br><br>
                                            <small>December 26, 2024 | by Thet Htar</small><br><br>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nisi numquam
                                                voluptate vel cum, placeat labore? Provident veniam dolorem nisi fugiat earum dignissimos in, 
                                                magnam mollitia porro sint amet accusantium.
                                            </p>
                                        </a>                            
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-3 post">
                                        <a href="post-detail.html">
                                            <h5>HOW TO BE A PROFESSIONAL WEB DEVELOPER IN ONE YEAR</h5><br>
                                            <img src="images/post3.jpg" alt=""><br><br>
                                            <small>December 26, 2024 | by Thet Htar</small><br><br>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nisi numquam
                                                voluptate vel cum, placeat labore? Provident veniam dolorem nisi fugiat earum dignissimos in, 
                                                magnam mollitia porro sint amet accusantium.
                                            </p>
                                        </a>                            
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-3 post">
                                        <a href="post-detail.html">
                                            <h5>HOW TO BE A PROFESSIONAL WEB DEVELOPER IN ONE YEAR</h5><br>
                                            <img src="images/post2.jpg" alt=""><br><br>
                                            <small>December 26, 2024 | by Thet Htar</small><br><br>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nisi numquam
                                                voluptate vel cum, placeat labore? Provident veniam dolorem nisi fugiat earum dignissimos in, 
                                                magnam mollitia porro sint amet accusantium.
                                            </p>
                                        </a>                            
                                    </div>
                                    
                                </div>
                            </div>


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