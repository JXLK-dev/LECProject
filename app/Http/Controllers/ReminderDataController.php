<?php

namespace App\Http\Controllers;

use App\Models\reminder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReminderDataController extends Controller
{
    public function addReminder(Request $request)
    {
        $data = new reminder();
        $data->user_ID = Auth::id();
        $data->title = $request->title;
        $data->description = $request->desc;
        $data->save();
        return redirect()->back();
    }
    public function loadReminder()
    {
        $data = User::where('id', Auth::id())->get()[0];
        $reminderData = $data->reminders;
        return $reminderData;
    }
    public function updateReminder()
    {
    }
    public function deleteReminder()
    {
    }
}
