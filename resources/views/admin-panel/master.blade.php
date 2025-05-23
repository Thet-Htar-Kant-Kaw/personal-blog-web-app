<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

                <nav class="navbar navbar-expand-lg bg-body-secondary fixed-top px-5">
                    <div class="container-fluid">
                        <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
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
                            <a href={{ url('admin/users') }} class="nav-link">Users</a>  
                        </li>
                        <li class="nav-item">
                            <a href={{ url('admin/skills') }} class="nav-link">Skills</a>  
                        </li>
                        <li class="nav-item">
                            <a href={{ url('admin/projects') }} class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href={{ url('admin/student-count') }} class="nav-link">Students</a>
                        </li>
                        <li class="nav-item">
                            <a href={{ url('admin/categories') }} class="nav-link">Categories</a>
                        </li>
                    </ul>                   
                </div>
            
                <!-- Main Content -->
                <div class="main-content" id="mainContent">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- bootstrap js --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>    
    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    @yield('javascript')
</body>
</html>