<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    //Register
    public function register(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric|digits:10|unique:users',
            'password' => 'required|digits:8'
        ]);

        $register = new User();
        $register->u_type = 'user';
        $register->name = $req->name;
        $register->email = $req->email;
        $register->phone_number = $req->phone_number;
        $register->password = Hash::make($req->password);
        $register->status = 1;

        if($register->save()){
            $req->session()->flash('success', 'User registered successfully.');
            return redirect()->back();
        }else{
            $req->session()->flash('error', 'Something went wrong, Please try again.');
            return redirect()->back();
        }
    }

    //Login
    public function user_login(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        //dd($req->all());
        $email = $req->email;
        $password = $req->password;

        if (Auth::attempt(["email" => $email, "u_type" => "user", "password" => $password, "status" => 1])) {
            return redirect()->back();
        } else {
            $req->session()->flash('error', 'Invalid Username and Password.');
            return redirect()->back();
        }
    }

    // Logout
    public function user_logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
