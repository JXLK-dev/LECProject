<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

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
        $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required|min:5|max:20',
        ]);
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
        } else {
            $auth_message = 'Email may not exist or wrong password';
            return Redirect::back()->withErrors(['auth' => $auth_message]);
        }
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
        return redirect()->to('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
