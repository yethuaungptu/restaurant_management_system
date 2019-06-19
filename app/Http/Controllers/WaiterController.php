<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WaiterController extends Controller
{
    public function login(Request $request)
    {
        $request->session()->forget('staff_key');
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

            return view ('waiter.home');
        }else{
            return redirect('staff/login')->with('success', 'Account is incorrect');
        }

    }

}
