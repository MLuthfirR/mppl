<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Post;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        // return view('product.index', compact('products'));
    }

    public function create(){

        // return view('product.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock'=>'required'
            
        ]);

        News::create([
            'name' => request('name'),
            'description' => request('description'),
            'stock' => request('stock'),
        ]);

        // return redirect()->route('post.index');
    }

    public function edit($id){
        $news = News::find($id);
        // return view('product.edit', compact('product'));
    }

    public function update($id){
        $news = News::find($id);
        
        $news->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        // return redirect()->route('post.index');
    }
    public function destroy($id){
        $news = News::find($id);
        $news->delete();

        // return redirect()->route('post.index');
    }
}
