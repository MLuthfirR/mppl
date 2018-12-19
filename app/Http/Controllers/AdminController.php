<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Career;
use App\News;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin-home');
    }

    public function product()
    {
        $products = Product::all();
        return view('admin.admin-product', compact('products'));
    }

    public function career()
    {
        $careers = Career::all();
        return view('admin.admin-career', compact('careers'));
    }

    public function news()
    {
        $newss = News::all();
        return view('admin.admin-news', compact('newss'));
    }

}
