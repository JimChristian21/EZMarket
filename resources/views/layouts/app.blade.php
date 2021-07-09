<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        p{
            font-size: 15px;
        }
        .material-icons{
            font-size: 15px !important;
        }    
    </style> 
</head>
<body>
    <div id="app">
        <!--first navbar-->
        <nav class="navbar-top navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container d-flex">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto d-flex">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Sign In</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">Sign Up</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle fa-sm"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <h6 class="ml-2 mt-2 text-uppercase mx-5"><strong>{{ Auth::user()->name }}</strong></h6>
                                    <a class="dropdown-item" href="#">Account</a>
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
        <!--second navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container py-2">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!--Search Bar-->
                        <form class="container-fluid">
                            <div class="input-group">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="input-group-text btn btn-outline-success" id="basic-addon1">Search</button>
                            </div>
                        </form>
                        
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <a href="{{ url('/cart') }}" class="text-sm text-dark"><i class="material-icons">
                            shopping_cart</i><span class="badge bg-danger">1</span>My Cart</a>
                    </ul>
                </div>
            </div>
            
        </nav>
        <!--third navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm none-mobile">
            <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarText">
                <ul class="navbar-nav text-center mb-2 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ url('/home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/categories') }}">Fruits & Vegetables</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/categories') }}">Kitchen Accessories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/categories') }}">Hardwares</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/home') }}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/home') }}">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/home') }}">FAQ</a>
                  </li>
                </ul>
            </div>
        </nav>
        <main class="content-fluid">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-white text-muted">
            <section class="">
                <div class="container text-center text-md-start mt-5 pt-1">
                    <div class="row mt-3">
                        <div class="col-md-4 col-lg-5 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4"><a href="#" ></a>Laravel</h6>
                            <p><span class="material-icons">phone</span> <a href="#!" class="text-reset">+61 545 230 120</a></p>
                            <p><span class="material-icons">phone_iphone</span> <a href="#!" class="text-reset">+61 545 230 120</a></p>
                            <p><span class="material-icons">mail</span><a href="#!" class="text-reset">ezmarket@mail.com</a></p>
                            <p><span class="material-icons">language</span><a href="#!" class="text-reset">www.ezmarket.com</a></p>
                        </div>
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">CATEGORIES</h6>
                            <p><a href="#!" class="text-reset">Fruits & Vegetables</a></p>
                            <p><a href="#!" class="text-reset">Biscuits</a></p>
                            <p><a href="#!" class="text-reset">Furnishing & Home Needs</a></p>
                            <p><a href="#!" class="text-reset">Kitchen Accessories</a></p>
                        </div>
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">DOWNLOAD APP</h6>
                            <div class="d-flex justify-content-center">
                                <a href="#!" class=" rounded"><img style="width:120px !important"class="mx-1"src="https://klbtheme.com/groci/wp-content/uploads/2018/08/google.png"></a>
                                <a href="#!" class=" rounded"><img style="width:130px !important"class="mx-1"src="https://klbtheme.com/groci/wp-content/uploads/2018/08/apple.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color:#FFA500"></div>
        </footer>
    </div>
</body>
{{-- script --}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
@yield('script')
</html>
