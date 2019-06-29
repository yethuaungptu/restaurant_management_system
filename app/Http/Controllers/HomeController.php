<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Order;
use Carbon\Carbon;
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
        $data =[];
        $menuC = Menu::orderBy('count','desc')->limit(10)->get();
        for ($i = 0; $i < 10; $i++){
            array_push($data,Order::whereDate('created_at', Carbon::now()->subDay($i))->get()->sum('total'));
        }
        return view('home',compact('data','menuC'));
    }

}
