@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="variant-values-create" class="btn btn-primary">Create Variant Values</a>
        </div>
        <div class="row">
            <h2>Variant Values</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Variant Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Compare Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Product</th>
                    </tr>
                </thead>
                <tbody>
                    @php($VariantValues = Helper::VariantValues())
                    @foreach($VariantValues as $VariantValues)
                    <tr>
                        <th scope="row">{{ $VariantValues->id }}</th>
                        <td>{{ $VariantValues->variants }}</td>
                        <td>{{ $VariantValues->price }}</td>
                        <td>{{ $VariantValues->compare_price }}</td>
                        <td>{{ $VariantValues->qty }}</td>
                        <td>{{ $VariantValues->product->name }}</td>
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