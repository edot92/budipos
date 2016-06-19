<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
       $name =$request->input('password');
       $name =bcrypt($request->input('_token'));

       return $request->all();
       // return view('auth.register');
    }
}
