<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Order;
use App\Staff;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WaiterController extends Controller
{
    protected $products = [];
    public function login(Request $request)
    {
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
            $request->session()->push('staff_key', collect([$staff->name,$request->input('password'),$staff->id]));

            return redirect('staff/home');
        }else{
            return redirect('staff/login')->with('success', 'Account is incorrect');
        }

    }
    public function home(Request $request){
        $user = $request->session()->get('staff_key');
        if ($user){
            $menus = Menu::paginate(10);
            $categories = Category::all();
            if(session('order')){
                return redirect('staff/cart');
            }
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
    public function order(Request $request){

        $request->session()->put('order', $request->input());

         return back()->with('status', 'Profile updated!');
    }

    public function checkout(Request $request){
        foreach ($request->session()->get('cart') as $i=>$id){
                Menu::where('id',$request->session()->get('cart')[$i])->increment('count',(int)$request->session()->get('order')['count'.$request->session()->get('cart')[$i].'']);
            }

        $order = new Order([
            'staff_id' => $request->session()->get('staff_key')[0][2],
            'total' => $request->session()->get('order')['billtol']
        ]);
        $order->save();
        $request->session()->push('complete', $order);
        return back();
        dd($request->session()->get('cart'));
    }

    public function done(Request $request){
        if(session('complete')){
            $request->session()->forget('cart');
            $request->session()->forget('order');
            $request->session()->forget('complete');
            return redirect('staff/home');
        }else{
            return redirect('staff/cart');
        }
    }


}
