<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function getCloss()
    {
        if(isset($_COOKIE['close'])) {
                   setcookie('close', 'true', time() + (86400 * 30), "/");
        }
        return redirect()->back();
    }
}
