<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Db_test extends Controller
{
    //
    function select()
    {
        return $result= DB::table('user')->count();
      //  $result= DB::table('user')->sum('id');
        
    }
     function insert()
    {
         DB::table('user')->insert(
            array('id'=>'926','name'=>'jtsh','email'=>'jh@gmail.com')
        );
        
    }

    function update()
    {
         DB::table('user')->where('id',1)->update(
            array('name'=>'jussssm','email'=>'jsssh@gmail.com')
        );
    }
    function delete()
    {
        DB::table('user')->where('id',1)->delete();
    }
}
