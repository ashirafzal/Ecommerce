<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Ecommerce</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

        header{
            position: none;
        }

        body {
            /* background: #212121; */
            font-size: 22px;
            line-height: 32px;
            /* color: #ffffff; */
            margin: 0;
            padding: 0;
            word-wrap: break-word !important;
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            font-size: 60px;
            text-align: center;
            color: #FFF;
        }

        h3 {
            font-size: 30px;
            line-height: 34px;
            text-align: center;
            color: #FFF;
        }

        h3 a {
            color: #FFF;
        }

        a {
            color: #FFF;
        }

        h1 {
            margin-top: 100px;
            text-align: center;
            font-size: 60px;
            line-height: 70px;
            font-family: 'Bree Serif', 'serif';
        }

        h5{
            font-size: 2rem;
        }

        .list-unstyled>li>a{
            font-size: 1.5rem;
        }

        #container {
            margin: 0 auto;
            max-width: 890px;
        }

        p {
            text-align: center;
        }

        .toggle,
        [id^=drop] {
            display: none;
        }

        nav {
            margin: 0;
            padding: 0;
            background-color: #254441;
        }

        #logo {
            display: block;
            padding: 0 30px;
            float: left;
            font-size: 20px;
            line-height: 60px;
            color: #ffffff;
        }

        nav:after {
            content: "";
            display: table;
            clear: both;
        }

        nav ul {
            float: right;
            padding: 0;
            margin: 0;
            list-style: none;
            position: relative;
        }

        nav ul li {
            margin: 0px;
            display: inline-block;
            float: left;
            background-color: #254441;
        }

        nav a {
            display: block;
            padding: 14px 20px;
            color: #FFF;
            font-size: 17px;
            text-decoration: none;
        }

        nav ul li ul li:hover {
            background: #254441;
        }

        nav a:hover {
            background-color: #254441;
        }

        a:hover{
            color: #ffffff;
            text-decoration: none;
        }

        nav ul ul {
            display: none;
            position: absolute;
            top: 60px;
            z-index: 10;
        }

        nav ul li:hover>ul {
            display: inherit;
        }

        nav ul ul li {
            width: 170px;
            float: none;
            display: list-item;
            position: relative;
        }

        nav ul ul ul li {
            position: relative;
            top: -60px;
            left: 170px;
        }

        li>a:after {
            content: ' +';
        }

        li>a:only-child:after {
            content: '';
        }

        footer{
            background: #254441;
            /* background: rgb(245 245 245); */
            color: #ffffff;
        }

        .tiny-footer{
            font-size: 1.5rem;
            color: #ffffff;
        }

        @media all and (max-width : 768px) {

            #logo {
                display: block;
                padding: 0;
                width: 100%;
                text-align: center;
                float: none;
            }

            nav {
                margin: 0;
            }

            .toggle+a,
            .menu {
                display: none;
            }

            .toggle {
                display: block;
                background-color: #254441;
                padding: 14px 20px;
                color: #FFF;
                font-size: 17px;
                text-decoration: none;
                border: none;
            }

            .toggle:hover {
                background-color: #000000;
            }

            [id^=drop]:checked+ul {
                display: block;
            }

            nav ul li {
                display: block;
                width: 100%;
            }

            nav ul ul .toggle,
            nav ul ul a {
                padding: 0 40px;
            }

            nav ul ul ul a {
                padding: 0 80px;
            }

            nav a:hover,
            nav ul ul ul a {
                background-color: #000000;
            }

            nav ul li ul li .toggle,
            nav ul ul a,
            nav ul ul ul a {
                padding: 14px 20px;
                color: #FFF;
                font-size: 17px;
            }


            nav ul li ul li .toggle,
            nav ul ul a {
                background-color: #212121;
            }

            nav ul ul {
                float: none;
                position: static;
                color: #ffffff;
            }

            nav ul ul li:hover>ul,
            nav ul li:hover>ul {
                display: none;
            }

            nav ul ul li {
                display: block;
                width: 100%;
            }

            nav ul ul ul li {
                position: static;
            }
        }

        @media all and (max-width : 330px) {
            nav ul li {
                display: block;
                width: 94%;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <nav>
                <div id="logo">Ecommerce</div>

                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-1" class="toggle">Categories +</label>
                        <a href="#">Categories</a>
                        <input type="checkbox" id="drop-1" />
                        <ul>
                            @php($categories = Helper::categories())
                            @foreach($categories as $Uppercategory)
                            <li><a href="#">{{ $Uppercategory->name }}</a></li>
                            @endforeach
                        </ul>

                    </li>
                    <!-- <li>
                        <label for="drop-2" class="toggle">Web Design +</label>
                        <a href="#">Web Design</a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Links</a></li>
                            <li>
                                <label for="drop-3" class="toggle">Tutorials +</label>
                                <a href="#">Tutorials</a>
                                <input type="checkbox" id="drop-3" />
                                <ul>
                                    <li><a href="#">HTML/CSS</a></li>
                                    <li><a href="#">jQuery</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/policy">Policy</a></li>
                    <li><a href="/blogs">Blogs</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </nav>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="text-center text-lg-start text-lowercase">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Categories</h5>
                        <br>
                        <ul class="list-unstyled mb-0">
                            @php($categories = Helper::categories())
                            @foreach($categories as $Footercategories)
                            <li>
                                <a href="#" class="text-white">{{ $Footercategories->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-0">Brands</h5>
                        <br>
                        <ul class="list-unstyled">
                            @php($brand = Helper::brands())
                            @foreach($brand as $brands)
                            <li>
                                <a href="#!" class="text-white">{{ $brands->title }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Other Links</h5>
                        <br>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="/login" class="text-white">login</a>
                            </li>
                            <li>
                                <a href="/register" class="text-white">Register</a>
                            </li>
                            <li>
                                <a href="/careers" class="text-white">Careers</a>
                            </li>
                            <li>
                                <a href="/report_error" class="text-white">Report an Error</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-0">Help</h5>
                        <br>
                        <ul class="list-unstyled">
                            <li>
                                <a href="/contact" class="text-white">Contact us</a>
                            </li>
                            <li>
                                <a href="/blogs" class="text-white">Blogs</a>
                            </li>
                            <li>
                                <a href="/policy" class="text-white">Policy</a>
                            </li>
                            <li>
                                <a href="/about" class="text-white">About us</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 tiny-footer text-uppercase">
                © 2021 Copyright
                <a class="text-white text-uppercase" href="#">Ecommerce</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>