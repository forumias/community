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
	
	public function verify()
	{
		$user = auth()->user();	
		//echo '#####<pre>';print_r($user->);die;
		if($user->type == 1){
			return redirect('/admin/home');
		}else{
			return redirect('/');
		}
		
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
