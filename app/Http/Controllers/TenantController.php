<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tenant;
use Image;
class TenantController extends Controller
{

    //////view//////
    function addtenantview(){

           $tenants = Tenant::paginate(5);
           return view('Tenants/view',compact('tenants'));
           
        }

    /////insert/////
        function addtenantinsert(Request $request){

           $last_inserted_id=Tenant::insertGetId([
                'tenant_name' =>$request->tenant_name,
                'tenant_phone' =>$request->tenant_phone,
                'tenant_enroll' =>$request->tenant_enroll,
                'tenant_address1' =>$request->tenant_address1,
                'tenant_address' =>$request->tenant_address,
                'tenant_nid' =>$request->tenant_nid,
                'tenant_occu' =>$request->tenant_occu,
                'tenant_family' =>$request->tenant_family,
            ]);
        // echo $last_inserted_id;
        // $photo_to_upload =$request->tenant_image;
        // $filename =$last_inserted_id.".".


        if($request->hasFile('tenant_image')){
            $photo_to_upload =$request->tenant_image;
            $filename =$last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
            // print_r($filename);
            Image::make($photo_to_upload)->resize(400,450)->save(base_path
                ('public/uploads/tenant_photos/'.$filename));

            Tenant::find($last_inserted_id)->update([
                'tenant_image' =>$filename
            ]);
        }
           return back()->with('status','Tenant Infomation Added Successfully!');
        
        
           
            }




        //////delete////
            function deletetenant($tenant_id){
                Tenant::find ($tenant_id)->delete();
                return back()->with('deletestatus','Tenant Infomation Deleted Successfully!');
             }
         


           /////edit/////
             function edittenant($tenant_id){
          
                $single_tenant_info=Tenant::findOrFail($tenant_id);             
                return view('tenants/edit',compact('single_tenant_info')); 
        
                }


                function edittenantinsert(Request $request)
                {
                    Tenant ::find($request->tenant_id)->update([

                        'tenant_enroll' =>$request->tenant_enroll,
                        'tenant_name' =>$request->tenant_name,
                        'tenant_phone' =>$request->tenant_phone,
                        'tenant_address1' =>$request->tenant_address1,
                        'tenant_address' =>$request->tenant_address,
                        'tenant_nid' =>$request->tenant_nid,
                        'tenant_occu' =>$request->tenant_occu,
                        'tenant_family' =>$request->tenant_family,
                    ]);
                    return back() ->with('editstatus','Tenant Infomation Edited Successfully!');
                   
                 }
        




}
