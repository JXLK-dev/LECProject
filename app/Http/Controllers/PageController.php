<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function addReminder()
    {
        return view('add');
    }

    public function detail()
    {
        return view('detail');
    }
}
