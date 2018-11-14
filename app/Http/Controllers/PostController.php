<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Product;
use App\Category;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $products = Product::all();
        return view('post.index', compact('posts','products'));
    }

    public function create(){
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'category_id' => request('category_id')
        ]);

        return redirect('/home');
    }

    public function edit($id){
        $post = Post::find($id);
        $categories = Category::all();

        return view('post.edit', compact('post','categories'));
    }

    public function update($id){
        $post = Post::find($id);
        
        $post->update([
            'title'=> request('title'),
            'category_id'=> request('category_id'),
            'content'=> request('content')
        ]);

        return redirect()->route('post.index');
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index');
    }
}
