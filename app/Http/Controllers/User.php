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
    function service()
    {
        return view('user.header').view('user.service').view('user.footer');
    }
}
