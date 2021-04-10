<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flat;
use App\Booking;
use Image;
use DB;

class FlatsController extends Controller
{
    public function addflatview(){
        
    
        $flats=  Flat::all();
        $bookings = Booking::all();
        return view('Flat/view',compact('flats','bookings'));
        // return view('Flat/view',compact('bookings'));








      
        // $flats = Flat::paginate(5);
        // // echo Booking::all();
        // // $bookings = Booking::paginate(5);
        
        // // return view('Flat/view',compact('flats'));
        // // $bookings = Booking::paginate(5);
        // return view('Flat/view');
        
     }
    
    





     
 //////userview//////
 function addflatviews(){
    $flats = Flat::paginate(15);              
    return view('Flat/views',compact('flats'));

//     DB::table('flats')
//     ->select('tenants.tenant_name','tenants.tenant_phone','flats.fname')
//    ->join('flats','flats.id','=','tenants.id')
//    ->get();
//     echo flats::all();

 }

 function allflatApi(){
    $flats = Flat::paginate(15);              
    return json_encode($flats);


///Table Join/////
  
//    return view('Flat/views',('flats'));
        // echo flats::all();


        

    // view('Flat/views',compact('flats'));
    // return view('Flat/view');
    
 }










 //////adminview//////
 function addbookingreqview(){
//    echo Booking::all();
    $bookings = Booking::paginate(5);
    return view('flats/view',compact('bookings'));
 }






     /////insert/////
    function addflatinsert(Request $request){
        $last_inserted_id = Flat:: insertGetId([
        'fname' =>$request->fname,
        'fimage1' =>$request->fimage1,
        'fimage2' =>$request->fimage2,
        'fimage3' =>$request->fimage3,
        'fimage4' =>$request->fimage4,
        'ftype' =>$request->ftype,
        'fdescrip' =>$request->fdescrip,
        'ffacilities' =>$request->ffacilities,
        'fagree' =>$request->fagree,
        'frent' =>$request->frent,
        'fb' =>$request->fb, 
    ]);


    if($request->hasFile('fimage1')){
     
        $photo_to_upload =$request->fimage1;
        $filename =$last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
        Image::make($photo_to_upload)->resize(500,550)->save(base_path
            ('public/uploads/flatroom_photos/'.$filename));
            Flat::find($last_inserted_id)->update([
            'fimage1' =>$filename
        ]);
    }

         return back()->with('addstatus','Flat Information Added Successfully!');
    
    }






    //////delete////
    function deleteflat($flat_id){
        Flat::find ($flat_id)->delete();
        return back()->with('deletestatus','Flat Infomation Deleted Successfully!');
    }




    /////edit/////
    function editflat($flat_id){
        $single_flat_info=Flat::findOrFail($flat_id);
        $single_flat_info->fb = $single_flat_info->fb=="on" ? "checked":"";             
        return view('flat/view',compact('single_flat_info')); 
    }



    function editflatinsert(Request $request)
    {
        Flat ::find($request->flat_id)->update([

            'fname' =>$request->fname,
            // 'fimage' =>$request->fimage,
            'ftype' =>$request->ftype,
            'fdescrip' =>$request->fdescrip,
            'ffacilities' =>$request->ffacilities,
            'fagree' =>$request->fagree,
            'frent' =>$request->frent,
            'fb' =>$request->fb,
        
        ]);
        return back() ->with('editstatus','Flat Infomation Edited Successfully!');
    
    }














}
