<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MailController extends Controller
{
    public function postIndex(Request $request, User $user){
        dd($request->all(), $user);
    }
}
