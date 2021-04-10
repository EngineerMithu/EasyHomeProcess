<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
     /////insert/////
     function addbookingreqinsert(Request $request){
         Booking:: insert([
        'bname' =>$request->bname,
        'bcontra' =>$request->bcontra,
        'bflat' =>$request->bflat,
        'bcom' =>$request->bcom,
    ]);
    return back()->with('addstatus','Booking Request Sent Successfully!');
    
}
}








// <br>
// <br>
// <br>
// <br>
// <br>
// <div class="container">
// <div class="row">
// <div class="col-12">
// <div class="card">
// <div class="overflow-auto">
// <div class="overflow-hidden">.
// <div class="card-header bg-success">
// Flat Checking
// </div>
// <div class="card-body">
// </div>
// @if(session('deletestatus'))
// <div class="alert alert-danger">
// {{ session('deletestatus')}}
// </div>
// @endif
// <!--Button icon-->
// <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
// <table class="table table-bordered">
//                            -------------All Booking Request------------
//   <thead>
//     <tr>    
//       <th>Name</th>                          
//       <th>Address</th>                          
//       <th>Occupation</th>                          
//       <th>Comment</th>                                           
//       <th>Action</th>                                           
//     </tr>
//   </thead>
//   <tbody>
  
//   @forelse ($bookings as $booking)
//  <tr>

//       <td>{{$booking->bname }}</td> 
//       <td>{{$booking->baddress}}</td>   
//       <td>{{$booking->boccu }}</td>
//       <td>{{$booking->bcom }}</td> 
//       <td>
//       <div class="btn-group" role="group" aria-label="Basic example">
//       <a href="{{ url ('delete/booking') }}/{{ $booking->id}}" class="fa fa-trash btn btn-danger"> Delete</a>
//       <a href="{{ url ('edit/booking') }}/{{ $booking->id}}" class=" fa fa-edit btn btn-info"> Edit</a>
//       </div>
//       </td>
      
//    </tr>
//    @empty
//      <tr class="text-center text-danger">
//     <td colspan="8">Data Not Found!</td>
//     </tr>
//  @endforelse
// </tbody>
// </table>
// </div>
// </div> 
// </div>
// </div>
// </div>
// </div>
