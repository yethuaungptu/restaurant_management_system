<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Order;
use App\Sale;
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

    public function daily(){
        $datas = Sale::orderBy('created_at','asc')->limit(30)->get();
        return view('daily',compact('datas'));
    }
    public function monthly(){
        $result = Sale::whereYear('created_at',Carbon::now()->year)->get()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m');
            return $date;
        });
        return view('monthly',compact('result'));
    }
    public function yearly(){
        $profits = [];
        $total_sales = [];
        $costs = [];
        for ($i= 0; $i < 6; $i++){
          array_push($profits,Sale::whereYear('created_at',Carbon::now()->subYears($i))->get()->sum('profit'));
          array_push($total_sales,Sale::whereYear('created_at',Carbon::now()->subYears($i))->get()->sum('total_sales'));
          array_push($costs,Sale::whereYear('created_at',Carbon::now()->subYears($i))->get()->sum('costs'));
        }
        return view('yearly',compact('profits','total_sales','costs'));
    }

}
