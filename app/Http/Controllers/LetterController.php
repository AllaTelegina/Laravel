<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function getIndex($letter){
        return view('letter.'.$letter, ['letter' => $letter]);
    }
}
