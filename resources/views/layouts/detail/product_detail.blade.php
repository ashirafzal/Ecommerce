@extends('admin.dashboard')
@section('content')
<style>
    .content-div{
        background: #fff;
        width: 100%;
        padding: 2rem;
        font-size: 16px;
    }

    .column1 {
        width: 50%;
        font-weight: 400;
    }

    .column2 {
        width: 50%;
    }

    .row-content {
        border-bottom: 1px solid #e3e3e3;
    }
</style>
<div class="container-fluid">
    <div class="dashboard-content">
        <div class="row">
            <h2>Product Details</h2>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">ID</div>
                    <div class="column2">{{ $product->id }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Name</div>
                    <div class="column2">{{ $product->name }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Price</div>
                    <div class="column2">{{ $product->price }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Category</div>
                    <div class="column2"><a class="text-primary font-weight-bold" href="#">{{ $product->category->name }}</a></div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Sub Category</div>
                    <div class="column2"><a class="text-primary font-weight-bold" href="#">{{ $product->subcategory->name }}</a></div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Vendor</div>
                    <div class="column2"><a class="text-primary font-weight-bold" href="#">{{ $product->vendor->tittle }}</a></div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Brand</div>
                    <div class="column2"><a class="text-primary font-weight-bold" href="#">{{ $product->brand->title }}</a></div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Min Delivery Time</div>
                    <div class="column2">{{ $product->min_delete_time }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Qty in Stock</div>
                    <div class="column2">{{ $product->qty_in_stock }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Compare Price</div>
                    <div class="column2">{{ $product->compare_price }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Description</div>
                    <div class="column2">{{ $product->description }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Company Policy</div>
                    <div class="column2">{{ $product->company_policy }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Return Policy</div>
                    <div class="column2">{{ $product->return_policy }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Shipping Policy</div>
                    <div class="column2">{{ $product->shipping_policy }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Specifications</div>
                    <div class="column2">{{ $product->specifications }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Active</div>
                    @if($product->is_active == 1)
                    <div class="column2 text-success"><i class="fas fa-check-circle fa-2x"></i></div>
                    @else
                    <div class="column2 text-danger"><i class="fas fa-times-circle fa-2x"></i></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Show in Outlet</div>
                    @if($product->show_in_outlet == 1)
                    <div class="column2 text-success"><i class="fas fa-check-circle fa-2x"></i></div>
                    @else
                    <div class="column2 text-danger"><i class="fas fa-times-circle fa-2x"></i></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Show Vendor</div>
                    @if($product->show_vendor == 1)
                    <div class="column2 text-success"><i class="fas fa-check-circle fa-2x"></i></div>
                    @else
                    <div class="column2 text-danger"><i class="fas fa-times-circle fa-2x"></i></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Created At</div>
                    <div class="column2">{{ $product->created_at }}</div>
                </div>
            </div>
        </div>
        <div class="row row-content">
            <div class="content-div">
                <div class="row">
                    <div class="column1">Updated At</div>
                    <div class="column2">{{ $product->updated_at }}</div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection