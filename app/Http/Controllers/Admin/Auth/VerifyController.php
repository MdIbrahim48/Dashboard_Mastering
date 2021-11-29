<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verifyEmail($token){
        $verifiedUser = VerifyUser::where('token',$token)->first();
        if(isset($verifiedUser)){
           $user = $verifiedUser->user;
            if(!$user->email_verified_at){
                $user->email_verified_at = Carbon::now();
                $user->save();
                session()->flash('alert-success','Email Verification Success');
                return redirect('/admin/login');
            }else{
                session()->flash('alert-success','Your Email has been already Verified, please login');
                return redirect('/admin/login');
            }
        }else{
            session()->flash('alert-danger','verify invalid please check email and try again!!');
            return redirect('/admin/login');
        }
    }
}
