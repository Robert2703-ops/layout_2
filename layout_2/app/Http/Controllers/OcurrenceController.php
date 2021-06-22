<?php

namespace App\Http\Controllers;

use App\Models\Occurrence;
use Illuminate\Http\Request;

class OcurrenceController extends Controller
{
    public function occurrenceView()
    {
        $occurrences = Occurrence::all();
        return view('occurrence.occurrence', ['occurrence' => $occurrences]);
    }

    //get
    public function createOccurrenceView ()
    {
        return view('occurrence.createOccurrence');
    }

    //post
    public function createOccurrence ( Request $request )
    {
        $data = $request->validate([
            'title' => 'required|min:4|max:250|unique:occurrences,title',
            'description' => 'required|min:2|max:500',
            'label' => 'required|min:4|max:150',
            'status' => 'required',
            'accountable' => 'required|min:4|max:250'
        ]);

        Occurrence::create($data);

        $response = 'Occurrence created!';

        return back();
    }
}
