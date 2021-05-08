@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="#" class="btn btn-primary">Create Categories</a>
        </div>
        <div class="row">
            <h2>Categories</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Show in outlet</th>
                    </tr>
                </thead>
                <tbody>
                    @php($categories = Helper::Allcategories())
                    @foreach($categories as $categories)
                    <tr>
                        <th scope="row">{{ $categories->id }}</th>
                        <td>{{ $categories->name }}</td>
                        @if($categories->show_in_outlet == 1)
                        <td class="column2 text-success"><i class="fas fa-check-circle fa-2x"></i></td>
                        @else
                        <td class="column2 text-danger"><i class="fas fa-times-circle fa-2x"></i></td>
                        @endif
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