@extends('ui-panel.master')
@section('content')
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
@endsection