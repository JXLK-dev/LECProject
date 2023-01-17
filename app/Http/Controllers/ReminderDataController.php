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
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'title' => 'required|min:5|max:25',
            'desc' => 'required|min:5'
        ]);
        $data = new reminder();
        $data->user_ID = Auth::id();
        $data->title = $request->title;
        $data->description = $request->desc;
        if ($request->hasFile('image')) {
            $request->file('image')->move('asset_image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
        } else {
            $data->image = 'No Image';
        }
        $data->save();
        return redirect()->to('home');
    }
    public function loadReminder()
    {
        $data = User::where('id', Auth::id())->get()[0];
        $reminderData = $data->reminders;
        return $reminderData;
    }
    public function updateReminder(Request $request, $reminder_id)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'title' => 'required|min:5|max:25',
            'desc' => 'min:5'
        ]);
        $data = reminder::find($reminder_id);
        $data->title = $request->title;
        $data->description = $request->desc;
        if ($request->hasFile('image')) {
            $request->file('image')->move('asset_image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
        }
        $data->save();
        return redirect()->to('home');
    }
    public function deleteReminder($reminder_id)
    {
        $deleted = reminder::where('id', $reminder_id)->delete();
        return redirect()->back();
    }
}
