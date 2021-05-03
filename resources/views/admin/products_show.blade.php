@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row float-right">
            <a href="/create-products" class="btn btn-primary">Create Product</a>
        </div>
        <div class="row">
            <h2>Products</h2>
        </div>
        <br>
        <div class="row">
            <table class="table table-bordered table-light text-center">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Min Delivery Time</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Compare Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php($products = Helper::products())
                    @foreach($products as $products)
                    <tr>
                        <th scope="row">{{ $products->id }}</th>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->min_delete_time }}</td>
                        <td>{{ $products->qty_in_stock }}</td>
                        <td>{{ $products->compare_price }}</td>
                        <td><a class="btn btn-info" href="{{$products->id}}/product/detail">View</a></td>
                        <td><a class="btn btn-primary" href="{{$products->id}}/product">Edit</a></td>
                        <form method="POST" action="/{{$products->id}}/delete-product">
                            @csrf
                            @method('delete')
                            <td><button class="btn btn-danger" type="submit">Delete</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
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
        <div class="row">
            <h2>Variant Values</h2>
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