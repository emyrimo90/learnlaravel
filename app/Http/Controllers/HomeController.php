<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    function login(Request $request) {
        if (Auth::attempt(['name' => $request->get('username'),'password' => $request->get('password')])){
        session (['name'=>$request->get ('username')]);
             return Redirect::back ();
        } else {
            Session::flash ( 'message', "Invalid Credentials , Please try again." );
            return Redirect::back ();
        }
    }


}
