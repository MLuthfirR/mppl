<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Post;

class NewsController extends Controller
{
    public function index(){
        $newss = News::all();
        return view('news.index', compact('newss'));
    }

    public function create(){

        return view('news.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            
        ]);

        News::create([
            'name' => request('name'),
            'description' => request('description'),
            'status' => 1,
        ]);

        return redirect()->route('admin-news')->with('success','News added successfully...');;
    }

    public function edit($id){
        $news = News::find($id);
        return view('admin.admin-edit-news', compact('news'));
    }

    public function update($id, Request $request){
        $news = News::find($id);
        
        $news->name = $request->name;
        $news->description = $request->description;
        $news->update();

        return redirect()->route('admin-news');
    }
    public function destroy($id){
        $news = News::find($id);
        $news->delete();

        return redirect()->route('admin-news');
    }
}
