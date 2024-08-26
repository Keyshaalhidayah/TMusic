<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class LoginController extends Controller
{
    //

    public static function check(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        // return $credentials;

        if (Auth::attempt($credentials)) {
            return redirect()->intended('music')
                ->withSuccess('Signed in');
        }

        return redirect("daftar")->withSuccess('Login details are not valid');
    }

    public  function register(Request $request){
        
        $this->create($request->all());

        // return $user;
        return view('daftar');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('daftar');
    }
}
