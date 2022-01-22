<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class UserProfile extends Controller
{
    function index()
    {
      // return Profile::max('id');
      $res=Profile::find(1);
      $res->delete();
      return Profile::all();
     
    }
}
