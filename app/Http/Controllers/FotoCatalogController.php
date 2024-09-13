<?php

namespace App\Http\Controllers;

use App\Models\FotoCatalog;
use Illuminate\Http\Request;

class FotoCatalogController extends Controller
{
   public function getIndex()
   {
      $all = FotoCatalog::all();
      $hram = FotoCatalog::where('category', 'Hram')->get();
      $chasovnja = FotoCatalog::where('category', 'Chasovnja')->get();
      $school = FotoCatalog::where('category', 'School')->get();
      return view('foto', compact('all', 'hram', 'chasovnja', 'school'));
   }
}

