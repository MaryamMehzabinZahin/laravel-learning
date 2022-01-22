<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Db_test extends Controller
{
    //
    function select()
    {
       // $result= DB::table('user')->count();
      //  $result= DB::table('user')->sum('id');
      $result= DB::table('user')->avg('id');
        echo '<pre>';
        print_r($result);
    }
}
