@extends('layouts.app')
@section('content')
<style>
    body {
        font-size: 1.4rem;
        font-family: sans-serif;
    }

    .form-check-label {
        margin-left: 16px;
    }
</style>

<style>
    .jumbotron {
        background-color: #757575;
        color: #fff;
        padding: 100px 25px;
    }

    .container-fluid {
        padding: 60px 50px;
    }

    .bg-grey {
        background-color: #f6f6f6;
    }

    .logo {
        font-size: 200px;
    }

    @media screen and (max-width: 768px) {
        .col-sm-4 {
            text-align: center;
            margin: 25px 0;
        }
    }
</style>
<div class="jumbotron text-center">
    <h1>Ecommerce</h1>
    <p>We are specialized in providing best services</p>
    <form class="form-inline">
        <div class="input-group">
            <input type="email" class="form-control" size="50" placeholder="Email Address" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </div>
    </form>
</div>

<!-- Container (About Section) -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About Ecommerce</h2>
            <h4>Founded April 2021</h4>
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde veritatis, recusandae, modi esse, soluta sit ipsa qui laborum dignissimos veniam exercitationem 
                neque. Quos blanditiis autem placeat, harum mollitia at voluptatum. Nostrum ratione ducimus ad veritatis et sit blanditiis harum accusantium dolorem voluptatibus, 
                hic culpa! Id consequatur fuga enim inventore dolorem!
            </p>
            <button class="btn btn-primary btn-lg">Get in Touch</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo"></span>
        </div>
        <div class="col-sm-8">
            <h2>Our Values</h2>
            <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>
            <p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
        </div>
    </div>
</div>

<!-- Container (Services Section) -->
<div class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off"></span>
            <h4>POWER</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart"></span>
            <h4>LOVE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock"></span>
            <h4>JOB DONE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf"></span>
            <h4>GREEN</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate"></span>
            <h4>CERTIFIED</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench"></span>
            <h4 style="color:#303030;">HARD WORK</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
</div>
@endsection