<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function index()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('home');
    }
    public function addReminder()
    {
        return view('add');
    }

    public function detail()
    {
        return view('detail');
    }
}
