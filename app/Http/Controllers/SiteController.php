<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class SiteController extends Controller
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

    public function index()
    {
        return view('home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function site(){
        return view('index');
    }

    public function myHome()
    {
        return view('myHome');
    }
    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function myUsers()
    {
        return view('myUsers');
    }
}