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
                        <th scope="col">Variant Name</th>
                        <th scope="col">Variant Type</th>
                    </tr>
                </thead>
                <tbody>
                    @php($ProductVariants = Helper::ProductVariants())
                    @foreach($ProductVariants as $ProductVariant)
                    <tr>
                        <th scope="row">{{ $ProductVariant->id }}</th>
                        <td>{{ $ProductVariant->variant_name }}</td>
                        <td>{{ $ProductVariant->variant_type }}</td>
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