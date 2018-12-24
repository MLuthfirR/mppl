<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Post;

class FeedbackController extends Controller
{
    public function index(){
        $feedbacks = Feedback::all();
        return view('admin.admin-feed', compact('feedbacks'));
    }

    public function create(){

        return view('contact');
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

        return view('landing');
    }

}
