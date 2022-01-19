<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function index()
    {
        return view('user.header').view('user.index').view('user.footer');
    }
    function about()
    {
        return view('user.header').view('user.about').view('user.footer');
    }
    function session_set(Request $r)
    {
        $r->session()->put('name','vishal');
    }
    function session_get(Request $r)
    {
        echo $r->session()->get('name');
    }
    function session_remove(Request $r)
    {
        echo $r->session()->forget('name');
    }
}

