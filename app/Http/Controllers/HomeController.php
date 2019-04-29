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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pagecontent = view('/home',compact('order','item','user','categories'));

        //masterpage
        $pagemain = array(
            'title' => 'Home',
            'menu' => 'home',
            'submenu' => '',
            'pagecontent' => $pagecontent,
        );
        return view('masterpage', $pagemain);   
    }
}
