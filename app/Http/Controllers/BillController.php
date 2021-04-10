<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bill;
class BillController extends Controller
{
    ////////view////////
    function addbillview(){
        $bills =Bill::paginate(5);
        return view('Bill/view',compact('bills'));
        //  view('Bill/view');
    $a=$bill_ren;
    $b=$bill_ele;
    $c=$bill_gas;
    $d=$bill_water;
    $e=$bill_char;
    $f=$bill_char;
    $g=$bill_due;
    $sum=($a+$b+$c+$d+$e+$f+$g);
    $sum=$bill_tot; 
    }
    

    
    ///////insert////////       
    function addbillinsert(Request $req){
       Bill::insert([
        'bill_date'=>$req->bill_date,            
        'bill_name'=>$req->bill_name,            
        'bill_ren'=>$req->bill_ren,            
        'bill_ele'=>$req->bill_ele,            
        'bill_gas'=>$req->bill_gas,            
        'bill_wat'=>$req->bill_wat,                       
        'bill_char'=>$req->bill_char,            
        'bill_due'=>$req->bill_due,
        // 'bill_tot'=>$req->bill_tot,
      
        

        
    ]);
 
        return back()->with('status','Bill Added Successfully!');
    }
    


    



    ////////Delete////////
    function deletebill($bill_id){
        Bill::find ($bill_id)->delete();
        return back()->with('deletestatus','Bill Infomation Deleted Successfully!');
    }
    
        
    
    
    
    
    
    
    
    /////////Edit////////
    function editbill($bill_id){ 
        $single_bill_info=Bill::findOrFail($bill_id);             
        return view('bill/edit',compact('single_bill_info')); 
    }
    
    
    
    
    function editbillinsert(Request $request)
    {
        Bill::find($request->bill_id)->update([
        'bill_date'=>$request->bill_date,
        'bill_name'=>$request->bill_name,
        'bill_ren'=>$request->bill_ren,
        'bill_ele'=>$request->bill_ele,
        'bill_gas'=>$request->bill_gas,
        'bill_wat'=>$request->bill_wat,
        'bill_char'=>$request->bill_char,
        'bill_due'=>$request->bill_due,
        'bill_tot'=>$request->bill_tot,

    ]);
        return back() ->with('editstatus','Bill Infomation Edited Successfully!');
        
   }
    
    
}




































