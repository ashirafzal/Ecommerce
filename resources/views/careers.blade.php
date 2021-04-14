@extends('layouts.app')
@section('content')
<style>
    body {
        font-size: 1.4rem;
        font-family: sans-serif;
    }

    .container {
        padding: 3rem;
        margin-top: 1rem;
    }

    .form-check-label{
        margin-left: 16px;
    }

    footer {
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        margin-top: 10.4rem;
    }
</style>
<div class="container border">
    <h2 class="text-uppercase">We need a Full stack Developer (Laravel, Vue Js)</h2>
    <p class="text-left font-weight-bold">Description</p>
    <p class="text-left">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non magnam cumque cupiditate enim recusandae nemo voluptate qui. Deleniti accusamus iure perferendis quidem
        nulla eveniet fuga molestias? Eius eaque praesentium, iusto tempora sit impedit laborum culpa, minima veniam architecto et aperiam, cumque mollitia! Sit asperiores magnam
        quia adipisci labore? Odio, laudantium?
    </p>
    <span class="font-weight-bold">Posted 2 Days ago</span>
    <br><br>
    <a href="#" class="btn btn-primary">Apply now</a>
</div>
@endsection