<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login(Request $request){
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect(url('dashboard'));
        }
        else{
            return redirect()->back()->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
    public function Register(Request $request){
        $register = User::create([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'email'=>$request->input('email'),
            'role'=>'0',
            'password'=>Hash::make($request->input('password')),
        ]);
    }
    public function editProfile(Request $request){
        $edit = User::find($request->id);
        $edit->first_name = $request->first_name;
        $edit->last_name = $request->last_name;
        $edit->email = $request->email;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return redirect()->back()->with('success','PROFILE UPDATED SUCCESS');
    }
}
