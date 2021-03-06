<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    protected $redirectTo = '/admin-home';
    protected $redirectAfterLogout = '/landing';

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function Logout(){
        auth()->logout();
    
        session()->flash('message', 'Some goodbye message');
    
        return redirect('/landing');
      }


    
}
