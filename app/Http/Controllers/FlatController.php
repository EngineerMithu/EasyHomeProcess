<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flat;
class FlatController extends Controller
{
        //////view//////
function addflatview(){

    
    return view('Flat/view');
 
 
 }


 /////insert/////
function addflatinsert(Request $request){
    Flat:: insert([
    'fname' =>$request->fname,
    'fimage' =>$request->fimage,
    'ftype' =>$request->ftype,
    'fdescrip' =>$request->fdescrip,
    'ffacilities' =>$request->ffacilities,
    'fagree' =>$request->fagree,
    'fb' =>$request->fb, 
]);
return back()->with('addstatus','Flat Information Successfully!');

}
}
