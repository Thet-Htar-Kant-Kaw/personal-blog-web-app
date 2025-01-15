<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap css  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">    
</head>

<body>    
    <div>
        <div class="row">
            <div class="col-md-12">
                {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary px-4">
                    <div class="container-fluid">
                      <a class="navbar-brand fw-bold" href="#">Personal Blog</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Thet Htar
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Log Out</a></li> --}}
                                    {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                    {{-- </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> --}}

                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top px-5">
                    <div class="container-fluid">
                        <a class="navbar-brand fw-bold" href="#">{{ Auth::user()->name }}'s Personal Blog</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                  <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                      </a>
                                      <ul class="dropdown-menu">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to log out?')">Log Out</button>
                                        </form>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </div>
                </nav>

                {{-- SIDE NAVBAR --}}
                <div class="sidenav d-flex flex-column p-3" id="sidenav">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Post</a>
                        </li>
                    </ul>                   
                </div>
            
                <!-- Main Content -->
                <div class="main-content" id="mainContent">
                    <h1>Welcome to the Dashboard</h1>
                    <p>This is the main content area. Your content goes here.</p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consequuntur earum consequatur hic nihil? Ea deserunt odio repudiandae dolor quo, dolore tempore itaque nemo doloribus repellendus consequatur, cupiditate quae porro!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto doloribus corporis nam sequi fugiat. Impedit nam beatae repellat nemo ea ipsam vitae non perspiciatis quidem? Dignissimos culpa reprehenderit veniam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quod numquam ab deserunt amet fuga? Ut, veritatis dolor maiores voluptate fugit, aut saepe blanditiis autem ex quas dolores? Eos, nihil!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, aliquid reprehenderit delectus rem, excepturi, provident eligendi iure facere ipsum consectetur dolorum corporis. Esse doloribus, sit quia illum labore dolor id?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus corporis inventore doloribus a, dolorum quos deserunt magni officia deleniti sunt! Neque animi harum accusantium quas iure dolor, sapiente placeat molestiae?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consequuntur earum consequatur hic nihil? Ea deserunt odio repudiandae dolor quo, dolore tempore itaque nemo doloribus repellendus consequatur, cupiditate quae porro!     
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus vitae enim praesentium a laborum quisquam est accusamus minus vel expedita. Repellendus odit excepturi earum eligendi perferendis, veniam mollitia totam optio.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod expedita, veniam blanditiis soluta neque reiciendis quasi quam fugit hic consectetur recusandae deserunt magnam. Temporibus, deserunt ducimus rem iste sit non?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consequuntur earum consequatur hic nihil? Ea deserunt odio repudiandae dolor quo, dolore tempore itaque nemo doloribus repellendus consequatur, cupiditate quae porro!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto doloribus corporis nam sequi fugiat. Impedit nam beatae repellat nemo ea ipsam vitae non perspiciatis quidem? Dignissimos culpa reprehenderit veniam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quod numquam ab deserunt amet fuga? Ut, veritatis dolor maiores voluptate fugit, aut saepe blanditiis autem ex quas dolores? Eos, nihil!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, aliquid reprehenderit delectus rem, excepturi, provident eligendi iure facere ipsum consectetur dolorum corporis. Esse doloribus, sit quia illum labore dolor id?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus corporis inventore doloribus a, dolorum quos deserunt magni officia deleniti sunt! Neque animi harum accusantium quas iure dolor, sapiente placeat molestiae?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consequuntur earum consequatur hic nihil? Ea deserunt odio repudiandae dolor quo, dolore tempore itaque nemo doloribus repellendus consequatur, cupiditate quae porro!
                    Lorem ipsum dolor sit amet consectetur adipisicing
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aliquid! Aliquid, vitae aspernatur itaque earum fugiat nam nobis obcaecati perferendis. Neque id error molestias eligendi explicabo corporis voluptatibus eius voluptatem!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consequuntur earum consequatur hic nihil? Ea deserunt odio repudiandae dolor quo, dolore tempore itaque nemo doloribus repellendus consequatur, cupiditate quae porro!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto doloribus corporis nam sequi fugiat. Impedit nam beatae repellat nemo ea ipsam vitae non perspiciatis quidem? Dignissimos culpa reprehenderit veniam.
                </div>
            </div>
        </div>
    </div>

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>