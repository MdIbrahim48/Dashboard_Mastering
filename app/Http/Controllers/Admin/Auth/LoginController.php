<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function create(){
        if(Auth::check()){
            return Redirect::to('/admin/dashboard');
        }
        return view('admin.auth.login');
    }

    public function authenticate(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $userInformation = $request->only(['email','password']);
        $remember_me = $request->has('remember') ? true : false ;

        //if remember me is checked
        if($request->has('remember')){
            if(Auth::attempt($userInformation , $remember_me)){
                if( Auth::user()->email_verified_at == null){
                    session()->flash('alert-danger','Please Verify Your Email First!!');
                    Auth::logout();
                    return back();
                }
            }
            if(Auth::user()->role == '1' || Auth::user()->role == '2' || Auth::user()->role == '3'){
                return redirect()->route('admin.dashboard');
            }else{
                Auth::logout();
                return redirect('/');
            }
        }

        // if remember me uncheck
        if(Auth::attempt($userInformation)){
            if(Auth::User()->email_verified_at == null){
                session()->flash('alert-danger','Please Verify Your Email First!!');
                Auth::logout();
                return back();
            }
            if(Auth::User()->role == '1' || Auth::user()->role == '2' || Auth::user()->role == '3'){
                return redirect()->route('admin.dashboard');
            }else{
                Auth::logout();
                return redirect('/');
            }
        }

        session()->flash('alert-danger', "Email and Password doesn't match");
        return back();

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }



}
