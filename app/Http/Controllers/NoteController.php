<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function postStore(Request $request)
    {
      // $validatedData = $request->validate([
         //  'title' => 'required|string|max:255',
         //   'time' => 'required|string|max:255',
           // 'oror' => 'required|string|max:255',
          //  'names' => 'required|array',
         //   'names.*' => 'required|string|max:255',
         //   'content' => 'required|string'
       // ]);



$request['names']=implode(",", $request->names);

// Преобразование массива имен в строку
       // $validatedData['names'] = implode(",", $validatedData['names']);
        //Note::create($validatedData);

        Note::create($request->all());

        return redirect()->back()->with('success', 'Note created successfully!');
    }

    public function showDonationForm()
    {
        return view('donate');
    }

    public function calculateDonations()
    {
        $totalDonations = Donation::sum('amount');
        return view('your-view', compact('totalDonations'));
    }

}



