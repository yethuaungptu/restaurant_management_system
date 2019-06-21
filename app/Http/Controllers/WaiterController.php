<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Staff;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WaiterController extends Controller
{
    protected $products = [];
    public function login(Request $request)
    {
        $request->session()->forget('staff_key');
        $request->session()->forget('cart');
        return view('waiter.login');
    }

    public function logout(Request $request){
        $request->session()->forget('staff_key');
        return redirect('staff/login')->with('success', 'Account logout successful');
    }

    public function check(Request $request)
    {
        $staff = Staff::where('email', $request->input('email'))->first();
        if($staff && Hash::check($request->input('password'), $staff->password)){
            $request->session()->put('staff_key', $staff->name);

            return redirect('staff/home');
        }else{
            return redirect('staff/login')->with('success', 'Account is incorrect');
        }

    }
    public function home(Request $request){
        $user = $request->session()->get('staff_key');
        if ($user){
            $menus = Menu::all();
            $categories = Category::all();
            return view('waiter.home',compact('user','menus','categories'));
        }else{
            return redirect('staff/login')->with('success', 'Auth Failed');
        }

    }
    public function cart($id,Request $request){
        $request->session()->push('cart', $id);

        return back();

    }

    public function cartview(Request $request){
        $user = $request->session()->get('staff_key');
        if ($user){
            $menus = Menu::all();
            $categories = Category::all();
            return view('waiter.cart',compact('user','menus','categories'));
        }else{
            return redirect('staff/login')->with('success', 'Auth Failed');
        }

    }
    public function remove($id,Request $request){
        $request->session()->forget('cart.' .$id);

        return back();

    }

}
