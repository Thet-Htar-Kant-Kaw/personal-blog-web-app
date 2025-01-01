<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CUSTOM CSS  -->
     <link rel="stylesheet" href="css/style.css">
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
                    <a href="">ABOUT</a>
                    <a href="">SKILLS</a>
                    <a href="">BLOG</a>
                </div>

                <!-- ABOUT SECTION -->
                <!-- <div> -->
                    <div class="row">
                        <div class="col-md-12">

                            <div class="container">
                                <div class="post-detail">
                                    <div>
                                        <h3>HOW TO BE A PROFESSIONAL WEB DEVELOPER IN ONE YEAR</h3><br>
                                        <span class="badge rounded-pill text-bg-secondary">JAVASCRIPT</span><br><br>
                                        <img src="images/post1.jpg" alt=""><br><br>
                                        <span>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            &nbsp;December 28, 2024
                                        </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span>
                                            <i class="fa-solid fa-user"></i>
                                            &nbsp;Thet Htar
                                        </span><br><br>                                  
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nisi numquam
                                            voluptate vel cum, placeat labore? Provident veniam dolorem nisi fugiat earum dignissimos in, 
                                            magnam mollitia porro sint amet accusantium. Lorem ipsum dolor, sit amet consectetur 
                                            adipisicing elit. Sequi quaerat aperiam doloribus ipsa, tenetur maiores unde, 
                                            dolorem ducimus beatae laudantium et magni hic. Provident inventore 
                                            veniam quos maiores omnis perferendis.
                                        </p>
                                        <button class="btn love-btn btn-sm">
                                            <i class="fa-solid fa-heart"></i>
                                            &nbsp;&nbsp;<span class="text-white">50</span>
                                        </button>
                                        <button class="btn like-btn btn-sm">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                            &nbsp;&nbsp;<span class="text-white">50</span>
                                        </button>
                                        <button class="btn cmt-btn btn-sm" data-bs-toggle="collapse" data-bs-target="#commentSection">
                                            <i class="fa-solid fa-comment"></i>
                                            &nbsp;&nbsp;<span class="text-white">50</span>
                                        </button>
                                    </div>
                                    
                                    <br><br>
                                    <div class="comment-box container border border-secondary-subtle rounded">
                                        <div class="input-group">
                                            <textarea class="form-control fs-5" rows="3" placeholder="Enter your comments here..."></textarea>
                                            <div class="input-group-append">
                                                <i class="btn fa-solid fa-paper-plane fs-4 px-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- comments section -->
                                    <div class="collapse comment-section" id="commentSection">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-end align-items-start">
                                                    <img src="images/thkk.jpg" alt="">
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-10">
                                                    <h5>Thet Htar</h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                        Quisquam, voluptates. Quisquam, voluptates.
                                                    </p>
                                                </div>    
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-end align-items-start">
                                                    <img src="images/thkk.jpg" alt="">
                                                </div>
                                                <div class="col-md-10 col-sm-10 col-10">
                                                    <h5>Thet Htar</h5>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                        Quisquam, voluptates. Quisquam, voluptates.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
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
     <script src="js/script.js"></script>
</body>
</html>