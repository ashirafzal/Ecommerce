@extends('layouts.main')

@section('content')
<!-- <div class="hero" style="background-image: url('images/background-image.jpg');"></div> -->
<div style="background: #f7f7f7;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height: 500px;" class="d-block w-100" src="images/img4.jpg" alt="Slider Image">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img7.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img10.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img11.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img4.jpg" alt="Slider Image">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img7.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img10.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img style="height: 500px;" class="d-block w-100" src="images/img11.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container mb-5 mt-5">
        <h3 class="text-center">New Sale Offers</h3>
    </div>
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="images/img1.png" class="rounded" width="320"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="images/img2.jpg" class="rounded" width="320"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="images/img3.jpg" class="rounded" width="320"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5 mt-5">
        <h3 class="text-center">Trending Products</h3>
    </div>
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/fcRasFv.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/vD8fgks.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/Iy7w1yJ.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/fcRasFv.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/vD8fgks.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/Iy7w1yJ.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/fcRasFv.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/vD8fgks.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="https://i.imgur.com/Iy7w1yJ.jpg" class="rounded" width="160">
                        <h5>GARNIER</h5>
                        <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                        <div class=" cost mt-3 text-dark"> <span>$60</span>
                            <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                    <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Add to cart</span> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5 mt-5">
        <h3 class="text-center">New Sale Offers</h3>
    </div>
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="images/img1.png" class="rounded" width="320"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="images/img2.jpg" class="rounded" width="320"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center"> <img src="images/img3.jpg" class="rounded" width="320"></div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
@endsection