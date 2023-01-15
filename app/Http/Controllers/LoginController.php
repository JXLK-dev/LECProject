<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class LoginController extends Controller
{
    public function home()
    {
        return view('\navbar');
    }

    public function login1(Request $request)
    {
        // $request->all();
        // dd($request);
        $auth = [
            'email' => $request->email,
            'password' => $request->password

        ];
        $remember = $request->remember;

        if (Auth::attempt($auth)) {
            if ($remember) {
                Cookie::queue('emailcookie', $request->email, 300);
            }
            return redirect()->route('home');
        }
        return view('login');
    }

    public function register1(Request $request)
    {
        // $request->all();
        // dd($request);
        $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email:rfc',
            'password' => 'required|min:5|max:20',
            'gender' => 'required'
        ]);
        $password = bcrypt($request->password);
        $data = User::create($request->all());
        $data->save();
        $data->update(['password' => $password]);
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
