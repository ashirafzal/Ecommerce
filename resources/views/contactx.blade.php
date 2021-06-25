<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact</title>
    <style>
        body {
            font-family: sans-serif;
        }

        label {
            font-size: 1rem;
        }

        form {
            padding: 2rem;
            margin-bottom: 4rem;
        }

        .text-danger {
            font-size: 1rem;
        }

        footer {
            clear: both;
            position: relative;
            margin-top: 340px;
        }
    </style>
</head>

<body>
    @extends('layouts.main')
    @section('content')
    <div id="app">
        <example-component />
    </div>
    @endsection
</body>

</html>