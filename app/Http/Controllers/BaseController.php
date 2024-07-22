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

    public function getAboutthetemple(){
        return view('aboutthetemple');

    }

    public function getSchedule(){
        return view('schedule');

    }

    public function getNote(){
        return view('note');

    }

    public function getSacraments(){
        return view('sacraments');

    }

    public function getWeddingcalendar(){
        return view('weddingcalendar');

    }

}
