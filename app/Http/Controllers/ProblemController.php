<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problem;
use DB;

class ProblemController extends Controller
{


    //////view//////
function addproblemview(){

    $Problems= Problem::paginate(5);          
    return view('Problem/view',compact('Problems'));


   

}




/////insert/////
function addprobleminsert(Request $request){

    Problem::insert([
    'pro_date' =>$request->pro_date,
    'pro_name' =>$request->pro_name,
    'pro_class' =>$request->pro_class,
    'pro_con' =>$request->pro_con,
    'pro_blem' =>$request->pro_blem,
    
    ]);
    return back()->with('addstatus','Problem Added Successfully!');
}


//////delete////
function deleteproblem($problem_id){
    Problem::find ($problem_id)->delete();
    return back()->with('deletestatus','Problem Deleted Successfully!');
    }










    
/////edit/////
function editproblem($problem_id){

    $single_problem_info=Problem::findOrFail($problem_id);             
    return view('problem/edit',compact('single_problem_info')); 
    
    }
    
    
    
    
    
    
   
    function editprobleminsert(Request $request){
        Problem::find($request->problem_id)->update([
            'pro_date' =>$request->pro_date,
            'pro_name' =>$request->pro_name,
            'pro_class' =>$request->pro_class,
            'pro_con' =>$request->pro_con,
            'pro_blem' =>$request->pro_blem,
            
        ]);
        return back()->with('editstatus','Problem Edited Successfully!');;

    }
    
    
    
    

}
