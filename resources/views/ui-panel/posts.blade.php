@extends('ui-panel.master')
@section('title', 'Posts')  
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="blog">
                    <h4>HOW TO BE A PROFESSIONAL WEB DEVELOPER IN ONE YEAR</h4><br>
                    <img src="images/post1.jpg" alt=""><br><br>
                    <small>December 26, 2024 | by Thet Htar</small><br><br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nisi numquam
                        voluptate vel cum, placeat labore? Provident veniam dolorem nisi fugiat earum dignissimos in, 
                        magnam mollitia porro sint amet accusantium.
                    </p>
                    <a href="post-detail.html">
                        <button class="btn btn-sm fw-bold">
                            Read More
                        </button>
                    </a>                                        
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="sidebar px-5">
                    <form action="">
                        <div class="container">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br><br><br>
                    <h5>Categories</h5>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JAVASCRIPT</a></li>
                        <li><a href="#">LARAVEL</a></li>
                        <li><a href="#">Vue.js</a></li>
                    </ul>
                </div>
            </div>
        </div>                                
    </div>
@endsection