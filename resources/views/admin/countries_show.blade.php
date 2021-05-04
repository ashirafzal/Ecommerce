@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="#" class="btn btn-primary">Create Countries</a>
        </div>
        <div class="row">
            <h2>Countries</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone code</th>
                    </tr>
                </thead>
                <tbody>
                    @php($countries = Helper::country())
                    @foreach($countries as $countries)
                    <tr>
                        <th scope="row">{{ $countries->id }}</th>
                        <td>{{ $countries->name }}</td>
                        <td>{{ $countries->phone_code }}</td>
                        <td><a class="btn btn-info" href="#">View</a></td>
                        <td><a class="btn btn-primary" href="#">Edit</a></td>
                        <td><a class="btn btn-danger" href="#">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div>
@endsection