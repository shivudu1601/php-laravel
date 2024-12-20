<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\AuthManager;
use App\Models\category;



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
    
}