<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function adminLogin(){
        return view('admin.components.login');
    }

    function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->passes()){
            if ( Auth::guard('admin')->attempt([
                    'email' => $request->email,
                    'password' => $request->password

                ],
                $request->get('remember') ) ){

                    $admin = Auth::guard('admin')->user();
                    if($admin->role == 1){
                        return redirect()->route('admin.dashboard');
                    }else{
                         Auth::guard('admin')->logout();
                         return redirect()->route('admin.login')->with('error', 'You are not authorized to access admin panel .');
                    }


                } 
                else{
                    return redirect()->route('admin.login')->with('error', 'Either Email/Password is incorrect');
                }
        }else{
            return redirect()->route('admin.login')->withErrors($validator)->withInput($request->only('email'));
        }
    }

  
}
