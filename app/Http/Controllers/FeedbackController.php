<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Post;

class FeedbackController extends Controller
{
    public function index(){
        $feedback = Feedback::all();
        // return view('product.index', compact('products'));
    }

    public function create(){

        // return view('product.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'subject' => 'required',
            'description' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            
        ]);

        Feedback::create([
            'subject' => request('subject'),
            'description' => request('description'),
            'email' => request('email'),
            'phone_number' => request('phone_number'),
        ]);

        // return redirect()->route('post.index');
    }

}
