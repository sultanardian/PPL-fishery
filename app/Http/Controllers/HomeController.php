<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
        if (Auth::user()->vendor == 1) {
            $datas = Auth::user()->orders()->get();
            return view('home', compact('datas'));
        }
        elseif (Auth::user()->vendor == 2){
            $datas = DB::table('users')
                ->join('orders', 'users.id', '=', 'orders.user_id')
                ->select('name', 'orders.id', 'title', 'description', 'weight')
                ->get();
            return view('home', compact('datas'));
        }
        else{
            return view('home');
        }
    }
}
