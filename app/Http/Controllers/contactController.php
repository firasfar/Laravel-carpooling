<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function show(Request $request)
    {
        $posts = contact::create([
            'nom' =>  $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return view('Contact');
    }
    function showcontact()
    {
        $contact = contact::all()->sortBy('updated_at',SORT_REGULAR,true);;
        return view('Contact_US',['contact'=>$contact]);
    }
}
