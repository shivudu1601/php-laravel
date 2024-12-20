<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoriesManager extends Controller
{
    public function category()
    {
        $categories = category::all();
        return view('categories', compact('categories'));
    }
}
