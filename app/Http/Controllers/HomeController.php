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
		//echo '#####<pre>';print_r($user);die;
		if($user->type == 1){
			return redirect('/admin/dashboard');
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
		echo 'rrrr444444444444';die;
        return view('home');
    }
}
