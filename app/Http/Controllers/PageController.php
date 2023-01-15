<?php

namespace App\Http\Controllers;

use App\Models\reminder;

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

    public function detail($reminder_id)
    {
        $data = reminder::where('id', $reminder_id)->get()[0];
        return view('detail')->with('reminder_detail', $data);
    }
}
