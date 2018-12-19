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
        return view('career.index', compact('careers'));
    }

    public function create(){

        return view('career.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'qualification'=> 'required',
            'image' => 'required'
        ]);
        
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        
        $career = new Career(); 
        $career->name = $request->name;
        $career->description = $request->description;
        $career->qualification = $request->qualification;
        $career->mime = $image->getClientMimeType();
        $career->original_filename =  $image->getClientOriginalName();
        $career->filename = $image->getFilename().'.'.$extension;
        $career->save();

        return redirect()->route('admin-career')->with('success','Product added successfully...');
    }

    public function edit($id){
        $career = Career::find($id);
        return view('admin.admin-edit-career', compact('career'));
    }

    public function update($id, Request $request){
        $career = Career::find($id);
        
        $career->name = $request->name;
        $career->description = $request->description;
        $career->qualification = $request->qualification;
        $career->update();

        return redirect()->route('admin-career');
    }
    public function destroy($id){
        $career = Career::find($id);
        $career->delete();

        return redirect()->route('admin-career');
    }
}
