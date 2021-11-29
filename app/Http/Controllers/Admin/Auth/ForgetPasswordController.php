<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public function forget_password(){
        return view('admin.auth.forget_password');
    }

    public function submitForgetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        // generate token
        $token = Str::random(60);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('admin.auth.email',['token' => $token], function($message) use($request){
            $message->to($request->email)
                    ->subject('Reset Password');
        });

        session()->flash('alert-success', "We have E-mailed your password reset link");
        return back();

    }

}
