@extends('layouts.main')
@section('content')
<style>
    body {
        font-size: 1rem;
    }

    .border{
        padding: 2rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .left-text{
        color: #000;
    }

    .para{
        color: #000;
        font-size: 14px;
    }

    .span{
        font-size: 14px;
    }

    footer {
        clear: both;
        position: relative;
        margin-top: 715px;
    }
</style>
<div class="container border">
    <h3 class="text-uppercase">We need a Full stack Developer (Laravel, Vue Js)</h3>
    <p class="text-left text-dark span">Description</p>
    <p class="text-left para">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non magnam cumque cupiditate enim recusandae nemo voluptate qui. Deleniti accusamus iure perferendis quidem
        nulla eveniet fuga molestias? Eius eaque praesentium, iusto tempora sit impedit laborum culpa, minima veniam architecto et aperiam, cumque mollitia! Sit asperiores magnam
        quia adipisci labore? Odio, laudantium?
    </p>
    <span class="span">Posted 2 Days ago</span>
    <br><br>
    <a href="#" class="btn btn-primary">Apply now</a>
</div>
@endsection