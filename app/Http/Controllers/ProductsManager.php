<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\AuthManager;
use App\Models\category;
use App\Models\Cart;



use Illuminate\Http\Request;

class ProductsManager extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function Product()
    {
        $products = Product::all();
        return view('products', compact('products'));

    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('details', compact('product'));
    }
    public function addToCart($id)
    {
        $cart = new Cart();
        $cart->user_id = auth()->id();
        $cart->product_id = $id;

        if ($cart->save()) {
            return redirect()->back()->with('success', 'Product added to cart');
        } else {
            return redirect()->back()->with('error', 'Failed to add product to cart');
        }
    }

}