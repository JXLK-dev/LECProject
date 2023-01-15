<?php

namespace App\Http\Controllers;

class PageController extends ReminderDataController
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
        $data = $this->loadReminder();
        return view('home')->with('lists', $data);
    }
    public function add()
    {
        return view('add');
    }

    public function detail()
    {
        return view('detail');
    }
}
