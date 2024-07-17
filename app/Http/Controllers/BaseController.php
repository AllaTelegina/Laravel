<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Blog;

class BaseController extends Controller
{
    public function getIndex(){
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('index', compact('blogs'));

    }

    public function getCookies(){
        return view('cookies');

    }

}
