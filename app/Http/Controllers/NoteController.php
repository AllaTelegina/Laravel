<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function postStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'oror' => 'required|string|max:255',
            'names' => 'required|string|max:50',
            'agriment' => 'required|string|max:255',
        ]);

        Log::info('Validated Data:', $validatedData);

        Note::create($validatedData);

        return redirect()->back()->with('success', 'Note created successfully!');
    }
}

    //public function postStore(Request $request)
   // {
        //$request->validate([
           // 'title' => 'required',
           // 'time' => 'required',
          //  'oror' => 'required',
          //  'names' => 'required|string|max:50',
          //  'agriment' => 'required',
       // ]);
      //  Note::create($request->all());
      //  return redirect() ->back();
   // }
//}
