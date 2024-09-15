<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;
use App\Models\Message;

class MailController extends Controller
{
    public function postIndex(Request $request, User $user)
    {
        abort_if(!$request->message, '401', 'message is ompty');
        abort_if(!$user->email, '401', 'email is ompty');

        //dd($request->all(), $user);
        //dd($request->message);
        Mail::to($user->email)->send(new MyEmail($user->name, $request->message));
        return redirect()->back();


    }



    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
    }


    public function submit(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);


        $details = [
            'name' => $request->name,
            'message' => $request->message,
        ];

        Mail::to('temple00@bk.ru')->send(new MyEmail($details['name'], $details['message']));

        return back()->with('success', 'Ваше сообщение отправлено!');
    }



}
