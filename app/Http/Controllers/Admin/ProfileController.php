<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.index');
    }

    public function profileUpdate(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        if($request->email != Auth::user()->email){
            $request->validate([
                'email' => 'required|unique:users,email',
            ]);
            User::findOrFail(Auth::user()->id)->update([
                'email' => $request->email
            ]);
        }

        User::findOrFail($id)->update([
            'name' => $request->name
        ]);
        if ($request->hasFile('image')) {

            //old photo delete if it is not default photo

            $old_photo_name = User::findOrFail($id)->image;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/profile_photo/').$old_photo_name;
                unlink($old_photo_location);
            }
            //photo update
            $image = $request->file('image');
            $name = Auth::User()->name.'_'.Auth::User()->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/profile_photo/');
            $image->move($destination,$name);
            User::findOrFail(Auth::User()->id)->update([
                'image' => $name,
            ]);

        }
        session()->flash('alert-success','Profile Update Successfully');
        return back();

    }

    public function update_password(Request $request , $id){
        $request->validate([
            'previous_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if(Hash::check($request->previous_password, Auth::user()->password)){
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),

            ]);
            session()->flash('alert-success','Password Change Successfully');
            return back();
        }
        session()->flash('alert-danger','Password does not match with previous Password');
        return back();
    }

}
