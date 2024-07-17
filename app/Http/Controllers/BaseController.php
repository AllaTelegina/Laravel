<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Blog;

class BaseController extends Controller
{
    public function getIndex(){
        $blogs = Blog::orderBy('id', 'ASC')->get();
        return view('index', compact('blogs'));

    }

    public function getCookies(){
        return view('cookies');

    }

    public function getStory(){
        return view('story');

    }

    public function getFullstory(){
        return view('fullstory');

    }

}
