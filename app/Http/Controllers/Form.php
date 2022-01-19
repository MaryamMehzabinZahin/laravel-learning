<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    //
    function index(Request $request)
    {
        
        // $request->validate([
        //     'doc'=>'required'
        // ]);
        echo $request->file('doc')->store('media');
    }
}
