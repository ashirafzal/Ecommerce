<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\City;
use App\Models\Contact;
use App\Models\Products;
use App\Models\ProductVariant;
use App\Models\ReportAnError;
use App\Models\VariantValue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;

class WebsiteController extends Controller
{
    public function CreateProduct()
    {
        $user = Auth::user();

        $product_active = false;
        $show_in_outlet = false;
        $show_vendor = false;

        $validate = Validator::make(Request::all(), [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'brands' => 'required',
            'min_delivery_time' => 'required',
            'quantity' => 'required',
            'compare_price' => 'required',
            'description' => 'required',
            'company_policy' => 'required',
            'return_policy' => 'required',
            'shipping_policy' => 'required',
            'specifications' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        if (request('product_active')) {
            $product_active = true;
        } else {
            $product_active = false;
        }

        if (request('show_in_outlet')) {
            $show_in_outlet = true;
        } else {
            $show_in_outlet = false;
        }

        if (request('show_vendor')) {
            $show_vendor = true;
        } else {
            $show_vendor = false;
        }

        $product = new Products();

        $product->name = request('name');
        $product->price = request('price');
        $product->category_id = request('category');
        $product->sub_category_id = request('subcategory');
        $product->vendor_id = $user->id;
        $product->brand_id = request('brands');
        $product->min_delete_time = now();
        $product->qty_in_stock = request('quantity');
        $product->compare_price = request('compare_price');
        $product->description = request('description');
        $product->company_policy = request('company_policy');
        $product->return_policy = request('return_policy');
        $product->shipping_policy = request('shipping_policy');
        $product->specifications = request('specifications');
        $product->is_active = $product_active;
        $product->show_in_outlet = $show_in_outlet;
        $product->show_vendor = $show_vendor;

        $product->save();

        return redirect()->back()->withSuccess('Product has been creeated successfully.');
    }

    public function ViewProduct($id)
    {
        $product = Products::find($id);

        $product = Products::with('subcategory', 'category', 'brand')
            ->where('id', $id)
            ->first();

        return view('layouts.view.product', ['product' => $product]);
    }

    public function ProductDetail($id)
    {
        $product = Products::find($id);

        $product = Products::with('subcategory', 'category', 'brand','vendor')
            ->where('id', $id)
            ->first();

        return view('layouts.detail.product_detail', ['product' => $product]);
    }

    public function UpdateProduct($id)
    {
        $validate = Validator::make(Request::all(), [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'brands' => 'required',
            'min_delivery_time' => 'required',
            'quantity' => 'required',
            'compare_price' => 'required',
            'description' => 'required',
            'company_policy' => 'required',
            'return_policy' => 'required',
            'shipping_policy' => 'required',
            'specifications' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $user = Auth::user();

        $product_active = false;
        $show_in_outlet = false;
        $show_vendor = false;

        if (request('product_active')) {
            $product_active = true;
        } else {
            $product_active = false;
        }

        if (request('show_in_outlet')) {
            $show_in_outlet = true;
        } else {
            $show_in_outlet = false;
        }

        if (request('show_vendor')) {
            $show_vendor = true;
        } else {
            $show_vendor = false;
        }

        $product = Products::find($id);

        $product->name = request('name');
        $product->price = request('price');
        $product->category_id = request('category');
        $product->sub_category_id = request('subcategory');
        $product->vendor_id = $user->id;
        $product->brand_id = request('brands');
        $product->min_delete_time = now();
        $product->qty_in_stock = request('quantity');
        $product->compare_price = request('compare_price');
        $product->description = request('description');
        $product->company_policy = request('company_policy');
        $product->return_policy = request('return_policy');
        $product->shipping_policy = request('shipping_policy');
        $product->specifications = request('specifications');
        $product->is_active = $product_active;
        $product->show_in_outlet = $show_in_outlet;
        $product->show_vendor = $show_vendor;

        $product->save();

        return redirect()->back()->withSuccess('Product has been updated successfully.');
    }

    public function DestroyProduct($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect()->back()->withSuccess('Product has been deleted successfully.');
    }

    public function CreateProductVariant()
    {
        $validate = Validator::make(Request::all(), [
            'product' => 'required',
            'variant_name' => 'required',
            'variant_type' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $ProductVariant = new ProductVariant();

        $ProductVariant->product_id = request('product');
        $ProductVariant->variant_name = request('variant_name');
        $ProductVariant->variant_type = request('variant_type');

        $ProductVariant->save();

        return redirect()->back()->withSuccess('Product variant has been creeated successfully.');
    }

    public function CreateVariantValue()
    {
        $validate = Validator::make(Request::all(), [
            'variant_value_name' => 'required',
            'product_variant' => 'required',
            'price' => 'required',
            'compare_price' => 'required',
            'qty' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $VariantValue = new VariantValue();

        $VariantValue->product_id = request('product_variant');
        $VariantValue->variants = request('variant_value_name');
        $VariantValue->price = request('price');
        $VariantValue->compare_price = request('compare_price');
        $VariantValue->qty = request('qty');

        $VariantValue->save();

        return redirect()->back()->withSuccess('Variant value has been creeated successfully.');
    }

    public function contact()
    {
        $validate = Validator::make(Request::all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->subject = request('subject');
        $contact->message = request('message');

        $contact->save();

        return response()->json(null, 200);
        
        // return redirect()->back()->withSuccess('We will contact you soon.');
    }

    public function ReportError()
    {
        $validate = Validator::make(Request::all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'report_error' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $report_error = new ReportAnError();
        $report_error->name = request('name');
        $report_error->email = request('email');
        $report_error->subject = request('subject');
        $report_error->error_details = request('report_error');

        $report_error->save();

        return redirect()->back()->withSuccess('Your Error has been report we will contact you soon about it.');
    }

    public static function test()
    {
        $brands = Brand::with('country','city')->get();

        dd($brands);
    }
    
}
