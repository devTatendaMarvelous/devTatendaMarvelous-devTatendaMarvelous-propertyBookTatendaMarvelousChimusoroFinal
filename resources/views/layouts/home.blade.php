<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="top">
            <div class="container">
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto nav-links">
                          
                            <li><a href="#home"> Home</a></li>
                            <li><a href="#about">About Us</a> </li>
                            <li><a href="#services">Services</a> </li>
                            <li><a href="#team">Team</a> </li>
                           <li class="">


                            <div class="dropdown">
                                <a href=" " class="dropbtn">Dropdown
                                <i class="icon-line-chevron-down"></i> 
                                </a>
                                <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                                </div>
          






		</li>
                            <li><a href="#contact">Contact Us</a> </li>
                        

                    </ul>

                   
                </div>
            </div>
        </nav>




        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- -----------------------------footer------------ -->
<footer class="why-choose row" >
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <h3>PROPERTYBOOK</h3>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro odit veritatis est accusantium, nulla atque, eum quaerat dolores sapiente eligendi quo non, neque alias! Iure reprehenderit vel nostrum aperiam? Voluptate.</P>
            </div>

            <div class="col-md-3">
                    <h5>USEFUL LINKS</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privace policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                        <h5>CONTACT US</h5>
                        
                        <address>
                                
                                12 SussexRd propertybook Park Harare
                            </address>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> 0716291396<br>
                            
                            <abbr title="Email Address"><strong>Email:</strong></abbr> infor@propertybook.com <br><br>
                        <div class="row">
                                <ul class="social-media text-center">
                                        <li><a href="#"><i class="icon-twitter1"></i></a></li>
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-gplus"></i></a></li>
                                        <li><a href="#"> <i class="icon-linkedin1"></i> </a></li>
                                    </ul>
                        </div>
                </div>

                <div class="col-md-3">
                        <h5>OUR NEWSLETTER</h5>
                        <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro odit veritatis est accusantium, nulla atque, eum quaerat dolores sapiente eligendi quo non, neque alias! Iure reprehenderit vel nostrum aperiam? Voluptate.</P>
                        <div class="row">
                            <form action="#" method="post">
                                <input type="text" class="news-letter">
                                <input type="submit" value="Subscribe" class="btn-primary ">
                            </form>
                        </div>
                </div>
        </div>
    </div>

</footer>
<!-- -------------------------------Footer end -->
<!-- --------------------------Copyrights -->
<section class="row copy p-4">
    <div class="container">
            <div class="text-center mt-4">
                    &copy;Copyright <strong>PROPERTYBOOK</strong>. All rights reserved <br>
                    Designed by Tatenda Marvelous Chimusoro
                            
            </div>
    </div>
</section>

<!-- --------------------Copyrights end -->
<a class="top-btn btn-info btn " href="#top"><i class="icon-arrow-up"></i></a>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
