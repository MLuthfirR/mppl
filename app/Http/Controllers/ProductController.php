<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(){

        return view('product.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock'=> 'required'
        ]);

        Product::create([
            'name' => request('name'),
            'description' => request('description'),
            'stock' => request('stock')
        ]);

        return redirect()->route('post.index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update($id){
        $product = Product::find($id);
        
        $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'stock' => request('stock')
        ]);

        return redirect()->route('post.index');
    }
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('post.index');
    }
}
