<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class UserProfile extends Controller
{
    function index()
    {
      // return Profile::max('id');
      $res=Profile::find(2);
      $res->name="polynew";
      $res->email="pli9@gmail.com";
      $res->save();

      return Profile::all();
     
    }
}
