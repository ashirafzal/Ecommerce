@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="#" class="btn btn-primary">Create Brands</a>
        </div>
        <div class="row">
            <h2>Brands</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Country</th>
                        <th scope="col">City</th>
                    </tr>
                </thead>
                <tbody>
                    @php($brand = Helper::brands())
                    @foreach($brand as $brands)
                    <tr>
                        <th scope="row">{{ $brands->id }}</th>
                        <td>{{ $brands->title }}</td>
                        <td>{{ $brands->sub_tittle }}</td>
                        <td>{{ $brands->description }}</td>
                        <td>{{ $brands->country->name }}</td>
                        <td>{{ $brands->city->name }}</td>
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