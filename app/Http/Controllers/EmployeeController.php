<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Image;
class EmployeeController extends Controller
{
    //
    //////view//////
    function addemployeeview(){

        $employees = Employee::paginate(5);
        return view('Employee/view',compact('employees'));
        // return view('Employee/view');
        
     }






  //////userview//////
  function addemployeeviews(){

    $employees = Employee::paginate(5);
    return view('Employee/views',compact('employees'));
    // return view('Employee/view');
    
 }







     
     

 /////insert/////
     function addemployeeinsert(Request $request){

        $last_inserted_id=Employee::insertGetId([
             
             'em_enroll' =>$request->em_enroll,
             'em_name' =>$request->em_name,
             'em_con' =>$request->em_con,
             'em_address1' =>$request->em_address1,
             'em_address' =>$request->em_address,
             'em_nid' =>$request->em_nid,
           
             
         ]);
//      // echo $last_inserted_id;
//      // $photo_to_upload =$request->tenant_image;
//      // $filename =$last_inserted_id.".".


     if($request->hasFile('em_image')){
         $photo_to_upload =$request->em_image;
         $filename =$last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
         // print_r($filename);
         Image::make($photo_to_upload)->resize(400,450)->save(base_path
             ('public/uploads/employee_photos/'.$filename));

             Employee::find($last_inserted_id)->update([
             'em_image' =>$filename
         ]);
     }
        return back()->with('status','Employee Infomation Added Successfully!');
     
     
        
         }




    //////delete////
    function deleteemployee($employee_id){
        Employee::find ($employee_id)->delete();
        return back()->with('deletestatus','Employee Infomation Deleted Successfully!');
    }
      


/////edit/////
function editemployee($employee_id){

    $single_employee_info=Employee::findOrFail($employee_id);             
    return view('employee/edit',compact('single_employee_info')); 

}


    function editemployeeinsert(Request $request)
    {
        Employee ::find($request->employee_id)->update([

            'em_enroll' =>$request->em_enroll,
            'em_name' =>$request->em_name,
            'em_con' =>$request->em_con,
            'em_address1' =>$request->em_address1,
            'em_address' =>$request->em_address,
            'em_nid' =>$request->em_nid,
        
        ]);
        return back() ->with('editstatus','Employee Infomation Edited Successfully!');
    
    }
     


}
