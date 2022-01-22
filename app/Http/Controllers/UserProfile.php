<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class UserProfile extends Controller
{
    function index()
    {
       return Profile::all();
    }
}
