<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profile;

class UserProfile extends Controller
{
    function index()
    {
      // return Profile::max('id');
      $res=new Profile;
      $res->name="poly";
      $res->email="pli@gmail.com";
      $res->save();
      
      return Profile::all();
     
    }
}
