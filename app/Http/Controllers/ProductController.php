<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->mime = $image->getClientMimeType();
        $product->original_filename =  $image->getClientOriginalName();
        $product->filename = $image->getFilename().'.'.$extension;
        $product->category = $request->category;
        $product->save();
        
        // Product::create([
        //     'name' => request('name'),
        //     'description' => request('description'),
        //     'stock' => request('stock'),
        //     'mime' => $image->getClientMimeType(),
        //     'original_filename' => $image->getClientOriginalName(),
        //     'filename' => $image->getFilename().'.'.$extension
        // ]);

        return redirect()->route('post.index')->with('success','Product added successfully...');
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
