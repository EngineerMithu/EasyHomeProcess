<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    function addtestview(){

        return view('Test/view');
    }

   function addtestinsert(Request $request){
    Test::insert([
        'test' =>$request->test,
       
    ]);
    return back()->with('status','Test Infomation Added Successfully!');
       
   } 
}
