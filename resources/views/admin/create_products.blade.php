@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row">
            <h2>Create Products</h2>
        </div>
        <form class="bg-white p-3" method="POST" action="product-created">
            @csrf
            @if(session('success'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{session('success')}}</strong>
            </div>
            @endif
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter product name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="0.00">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select name="category" class="form-control @error('category') is-invalid @enderror" id="exampleFormControlSelect1">
                    <option value=""></option>
                    @php($categories = Helper::categories())
                    @foreach($categories as $categories)
                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                    @endforeach
                </select>
                @error('category')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Sub Category</label>
                <select name="subcategory" class="form-control @error('subcategory') is-invalid @enderror">
                    <option value=""></option>
                    @php($subcategories = Helper::subcategories())
                    @foreach($subcategories as $subcategories)
                    <option value="{{ $subcategories->id }}">{{ $subcategories->name }}</option>
                    @endforeach
                </select>
                @error('subcategory')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Brands</label>
                <select name="brands" class="form-control @error('brands') is-invalid @enderror">
                    <option value=""></option>
                    @php($brand = Helper::brands())
                    @foreach($brand as $brands)
                    <option value="{{ $brands->id }}">{{ $brands->title }}</option>
                    @endforeach
                </select>
                @error('brands')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Min Delivery Time</label>
                <input type="text" name="min_delivery_time" class="form-control @error('min_delivery_time') is-invalid @enderror" placeholder="Min Delivery Time">
                @error('min_delivery_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Quantity In Stock</label>
                <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="Quantity In Stock">
                @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Compare Price</label>
                <input type="number" name="compare_price" class="form-control @error('compare_price') is-invalid @enderror" placeholder="Compare Price">
                @error('compare_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="6" placeholder="Write description about product"></textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Company Policy</label>
                <textarea class="form-control @error('company_policy') is-invalid @enderror" name="company_policy" rows="6" placeholder="Write something about company policy"></textarea>
                @error('company_policy')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Return Policy</label>
                <textarea class="form-control @error('return_policy') is-invalid @enderror" name="return_policy" rows="6" placeholder="Write something about return policy"></textarea>
                @error('return_policy')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Shipping Policy</label>
                <textarea class="form-control @error('shipping_policy') is-invalid @enderror" name="shipping_policy" rows="6" placeholder="Write something about shipping policy"></textarea>
                @error('shipping_policy')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Specifications</label>
                <textarea class="form-control @error('specifications') is-invalid @enderror" name="specifications" rows="6" placeholder="Write something about product specifications"></textarea>
                @error('specifications')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-check">
                <input name="product_active" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Product Active</label>
            </div>
            <div class="form-check">
                <input name="show_in_outlet" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show In Outlet</label>
            </div>
            <div class="form-check">
                <input name="show_vendor" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show Vendor</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection