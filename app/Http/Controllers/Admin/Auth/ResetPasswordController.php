<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function index($token){
        $email_info = DB::table('password_resets')->where('token',$token)->first();
        return view('admin.auth.reset',[
            'email_info' => $email_info,
            'token' => $token,
        ]);
    }

    public function submitResetPasswordForm(Request $request){


        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        //email is exists or not check


        $updatePassword = DB::table('password_resets')
        ->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();



        if(!$updatePassword){
            Session()->flash('alert-danger', "Invalid token or timeout");
            return back();
        }
        User::where('email',$request->email)->update([
            'password' => Hash::make($request->password),
        ]);

        //delete password reset row for this token
        DB::table('password_resets')->where(['email' => $request->email])->delete();
        Session()->flash('alert-success', "Password Changed Successfully");
        return redirect('/admin/login');

    }
}
