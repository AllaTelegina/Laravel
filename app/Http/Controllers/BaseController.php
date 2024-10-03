<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Blog;
use App\Utils\Calendar;
use App\Models\Week;

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
       //dd(config('month.month'), date('W'));
     $week = Week::where('week_number', date('W'))->first();
        return view('schedule', compact('week'));
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

    public function getNamecalendar(){
        return view('namecalendar');
    }

    public function getBoris(){
        return view('boris');
    }

    public function getTest(){
        return view('test');
    }

    public function getPrayers(){
        return view('prayers');
    }

    public function getFoto(){
        return view('foto');
    }


    public function getPublications(){
        return view('publications');
    }
    public function getSchool(){
        return view('school');
    }

    public function getSponsors(){
        return view('sponsors');
    }

    public function getHealer(){
        $week = Week::where('week_number', date('W'))->first();
        return view('healer', compact('week'));
    }

    public function getCalendar(){
        return view('calendar');
    }

    public function getIcons(){
        return view('icons');
    }
    public function getPostcards(){
        return view('postcards');
    }

    public function getAletter(){
        return view('aletter');
    }

    public function getQuotes(){
        return view('quotes');
    }

    public function getBiblio(){
        return view('biblio');
    }
}

