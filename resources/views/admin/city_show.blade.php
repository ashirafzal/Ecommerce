@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="#" class="btn btn-primary">Create Cities</a>
        </div>
        <div class="row">
            <h2>Cities</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">City name</th>
                        <th scope="col">Belongs to country</th>
                    </tr>
                </thead>
                <tbody>
                    @php($city = Helper::city())
                    @foreach($city as $cities)
                    <tr>
                        <th scope="row">{{ $cities->id }}</th>
                        <td>{{ $cities->name }}</td>
                        <td>{{ $cities->country->name }}</td>
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