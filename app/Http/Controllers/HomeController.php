<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
      public function register()
    {
        return view('auth.register2');
    }
     public function register_store(Request $request)
    {
       // return "f";
       $name =$request->input('name');
       $email =$request->input('email');
       $pass =$request->input('password');
       $token = $request->input('_token');

       $userr = new User;

        $userr->name = $name;
        $userr->email = $email;
        $userr->password = bcrypt($pass);
        $userr->remember_token = $token;



        $userr->save();
      return view('auth.register2');
       //return view('auth.register');
    }
}
