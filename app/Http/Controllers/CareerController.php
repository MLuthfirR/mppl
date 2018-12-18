<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Career;
use App\Post;

class CareerController extends Controller
{
    public function index(){
        $careers = Career::all();
        // return view('Career.index', compact('Careers'));
    }

    public function create(){

        // return view('Career.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'qualification'=> 'required'
        ]);
        
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        
        $career = new Career();
        $career->name = $request->name;
        $career->description = $request->description;
        $career->stock = $request->stock;
        $career->mime = $image->getClientMimeType();
        $career->original_filename =  $image->getClientOriginalName();
        $career->filename = $image->getFilename().'.'.$extension;
        $career->save();
        
        // Career::create([
        //     'name' => request('name'),
        //     'description' => request('description'),
        //     'stock' => request('stock'),
        //     'mime' => $image->getClientMimeType(),
        //     'original_filename' => $image->getClientOriginalName(),
        //     'filename' => $image->getFilename().'.'.$extension
        // ]);

        // return redirect()->route('post.index')->with('success','Career added successfully...');
    }

    public function edit($id){
        $career = Career::find($id);
        // return view('Career.edit', compact('Career'));
    }

    public function update($id){
        $career = Career::find($id);
        
        $career->update([
            'name' => request('name'),
            'description' => request('description'),
            'qualification' => request('qualification')
        ]);

        // return redirect()->route('post.index');
    }
    public function destroy($id){
        $career = Career::find($id);
        $career->delete();

        // return redirect()->route('post.index');
    }
}
