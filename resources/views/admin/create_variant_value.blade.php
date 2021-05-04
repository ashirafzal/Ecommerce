@extends('admin.dashboard')
@section('content')
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row">
            <h2>Create Variant Values</h2>
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
                <label for="">Enter Variant Value Name</label>
                <input type="text" name="variant_value_name" class="form-control @error('variant_value_name') is-invalid @enderror" placeholder="Enter variant value name">
                @error('variant_value_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Product Variant</label>
                <select name="product_variant" class="form-control @error('product_variant') is-invalid @enderror" id="exampleFormControlSelect1">
                    <option value=""></option>
                    @php($ProductVariants = Helper::ProductVariants())
                    @foreach($ProductVariants as $ProductVariant)
                    <option value="{{ $ProductVariant->id }}">{{ $ProductVariant->variant_name }}</option>
                    @endforeach
                </select>
                @error('product_variant')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Enter Price</label>
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="0.0">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Enter Compare Price</label>
                <input type="number" name="compare_price" class="form-control @error('compare_price') is-invalid @enderror" placeholder="0.0">
                @error('compare_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Enter Quantity</label>
                <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror" placeholder="0.0">
                @error('qty')
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