<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $product = Product::all()->count();
        $blog = Blog::all()->count();
        return view('admin.dashboard', ['product' => $product, 'blog' => $blog]);
    }

    public function product()
    {
        $product = Product::all();
        return view('product', ['product' => $product]);
    }

    public function menu()
    {
        $blog = Blog::all();
        return view('menu', ['blog' => $blog]);
    }

    public function menuDetails($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->first();
        return view('menudetails', ['blog' => $blog]);
    }
}
