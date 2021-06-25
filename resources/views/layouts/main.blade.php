<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <!-- <link rel="stylesheet" href="css/product.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script> -->
    <title>Ecommerce</title>
    <style>
        .bg-grey {
            background: #292929;
        }

        .logo-footer {
            margin-bottom: 40px;
        }

        footer {
            color: grey;
        }

        footer p,
        a {
            font-size: 12px;
            font-family: 'Roboto', sans-serif;
        }

        footer h6 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 40px;
            position: relative;
        }

        footer h6:after {
            position: absolute;
            content: "";
            background: grey;
            width: 12%;
            height: 1px;
            left: 0;
            bottom: -20px;
        }

        .btn-footer {
            color: grey;
            text-decoration: none;
            border: 1px solid;
            border-radius: 43px;
            font-size: 13px;
            padding: 7px 30px;
            line-height: 47px;
        }

        .btn-footer:hover {

            text-decoration: none;

        }

        .form-footer input[type="text"] {
            border: none;
            border-radius: 16px 0 0 16px;
            outline: none;
            padding-left: 10px;

        }

        ::placeholder {
            font-size: 10px;
            padding-left: 10px;
            font-style: italic;
        }

        .form-footer input[type="button"] {
            border: none;
            background: #232323;
            margin-left: -5px;
            color: #fff;
            outline: none;
            border-radius: 0 16px 16px 0;
            padding: 2px 12px;
        }

        .social .fa {
            color: grey;
            font-size: 22px;
            padding: 10px 15px;
            background: #3c3c3c;
        }

        footer ul li {
            list-style: none;
            display: block;
        }

        footer ul {
            padding-left: 0;
        }

        footer ul li a {
            text-decoration: none;
            color: grey;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: #f5f5f5 !important;

        }

        .logo-part {
            border-right: 1px solid grey;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@ecommerce.com</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+92-342-3351437</span></a>
                    <div class="float-right">
                        <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="site-logo">
                    <a href="index.html" class="text-black"><span class="text-primary">Ecommerce</a>
                </div>
                <div class="col-12">
                    <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li><a href="/" class="nav-link">Home</a></li>
                            <li class="has-children">
                                <a href="#" class="nav-link">Categories</a>
                                <ul class="dropdown arrow-top">
                                    @php($categories = Helper::categories())
                                    @foreach($categories as $Uppercategory)
                                    <li><a href="#" class="nav-link">{{ $Uppercategory->name }}</a></li>
                                    @endforeach
                                    <!-- <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                    <li class="has-children">
                                        <a href="#">More Links</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li><a href="/policy" class="nav-link">Policy</a></li>
                            <li><a href="/about" class="nav-link">About</a></li>
                            <li><a href="/blogs" class="nav-link">Blog</a></li>
                            <li><a href="/contact" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="container-fluid bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="logo-part">
                                <!-- <img src="https://i.ibb.co/sHZz13b/logo.png" class="w-50 logo-footer"> -->
                                <h4>E Commerce</h4>
                                <br>
                                <p>7637 Johar Town Dr. Chemms Of Prussia, PA 19406</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, distinctio provident! Sed voluptatem animi incidunt !</p>
                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <h6> About Company</h6>
                            <p>We are very e commerce company. We deals in all kinds of products sellings.</p>
                            <a href="#" class="btn-footer"> More Info </a><br>
                            <a href="/contact" class="btn-footer"> Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <h6> Help us</h6>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li> <a href="/"> Home</a> </li>
                                        <li> <a href="/about"> About</a> </li>
                                        <li> <a href="/contact"> Contact</a> </li>
                                        <li> <a href="/login">Login</a> </li>
                                        <li> <a href="/register">Register</a> </li>
                                        <li> <a href="/careers">Careers</a> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 px-4">
                                    <ul>
                                        <!-- <li> <a href="#"> Service</a> </li>
                                        <li> <a href="#"> Team</a> </li>
                                        <li> <a href="#"> Help</a> </li> -->
                                        <li> <a href="/policy">Policy</a> </li>
                                        <li> <a href="/report_error">Report an error</a> </li>
                                        <li> <a href="/blogs">Blogs</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <h6> Newsletter</h6>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <form class="form-footer my-3">
                                <input type="text" placeholder="search here...." name="search">
                                <input type="button" value="Go">
                            </form>
                            <p>That's technology limitation of LCD monitors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
</body>

</html>