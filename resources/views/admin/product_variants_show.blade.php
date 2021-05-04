@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="products-variants-create" class="btn btn-primary">Create Product Variants</a>
        </div>
        <div class="row">
            <h2>Product Variants</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a class="btn btn-info" href="#">View</a></td>
                        <td><a class="btn btn-primary" href="#">Edit</a></td>
                        <td><a class="btn btn-danger" href="#">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div>
@endsection