@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row">
            <h2>Create Products Variants</h2>
        </div>
        <form class="bg-white p-3" method="POST" action="/create-variant-value">
            @csrf
            @if(session('success'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{session('success')}}</strong>
            </div>
            @endif
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Product</label>
                <select name="product" class="form-control @error('product') is-invalid @enderror" id="exampleFormControlSelect1">
                    <option value=""></option>
                    @php($products = Helper::AllProducts())
                    @foreach($products as $products)
                    <option value="{{ $products->id }}">{{ $products->name }}</option>
                    @endforeach
                </select>
                @error('product')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Enter Product Variant Name</label>
                <input type="text" name="variant_name" class="form-control @error('variant_name') is-invalid @enderror" placeholder="Enter product variant name">
                @error('variant_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Variant Type</label>
                <select name="variant_type" class="form-control @error('variant_type') is-invalid @enderror" id="exampleFormControlSelect1">
                    <option value=""></option>
                    <option value="TEXT">TEXT</option>
                    <option value="TEXT_WITH_IMAGE">TEXT_WITH_IMAGE</option>
                </select>
                @error('variant_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection