@extends('layouts/app')
@section('content')
<div class="container">
<div class="row">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href=""> </a></li>
</ol>
</nav>
<div class="card">
<div class="overflow-auto">
<div class="overflow-hidden">.
<!-- <div class="card-header bg-success"> -->


<!--//////Add///////-->
<!-- Button trigger modal -->
<button type="button" class="fa fa-add btn btn-primary" data-toggle="modal" data-target="#example1Modal">
  Add Flat
</button>
<!-- Modal -->
<div class="modal fade" id="example1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form action="{{ url('add/flat/insert')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label>Flat</label>
<input type="hidden" name="" required value=""> 
<input type="text" class="form-control" required name="fname" value="">
<br>
<div class="form-group">
<label>Room Image</label>
<input type="file" class="form-control"  name="fimage1"  value="">
<br> 
<div class="form-group">
<div class="form-group">
<label>Type</label>
<input type="text" class="form-control"  name="ftype" value="">
<br>  
<div class="form-group">
<label>Flat Description</label>
<br> 
<br> 
<textarea  name="fdescrip" class="form-control" required rows="5" cols="45"></textarea>
<br>
<br>  <label>Facilities</label>
<br> 
<br> 
<textarea  name="ffacilities" class="form-control" required rows="5" cols="45"></textarea>
<br>
<br>  <label>Agreement</label>
<br> 
<br> 
<textarea  name="fagree" class="form-control" required rows="5" cols="45"></textarea>
<br>
<br> 
<div class="form-group">
<label>Rent</label>
<input type="text" class="form-control" required name="frent" value="">
<br>
<br>
<button type="submit" class="btn btn-warning">Add</button>
</form>
</div>
</div>
</div>
</div>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->
      </div>
    </div>
  </div>
</div>
















</div>
<div class="card-body">
</div>
@if(session('deletestatus'))
<div class="alert alert-danger">
{{ session('deletestatus')}}
</div>
@endif
<!--alert-->
@if(session('editstatus'))
<div class="alert alert-primary">
{{ session('editstatus')}}
</div>
@if(session('addstatus'))
<div class="alert alert-primary">
{{ session('addtstatus')}}
</div>
@endif
@endif

<!--Button icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<table class="table table-bordered  ">
                           -------------All Flats------------
  <thead > 
    <tr>    
      <th>Flat</th>                          
      <th>Image</th>                          
      <th>Type</th>                          
      <th>Description</th>                          
      <th>Facilities</th>                           
      <th>Agreement</th>                                                         
      <th>Rent</th>           
      <th>Action</th>           
      <!-- <th>Action</th>         -->
    </tr>
    </div>

  </thead>
  <tbody>
  
  @forelse ($flats as $flat)
 <!-- <tr> -->

      <td>{{$flat->fname }}</td>  
       <!-- <td>{{$flat->fimage }}</td>  -->
       <td>
       <img src="{{asset('uploads/flatroom_photos')}}/{{$flat->fimage1}}" alt="Not Found!" width="80">
  
      </td>
      <td>{{$flat->ftype}}</td>   
      <td>{{$flat->fdescrip }}</td>
      <td>{{$flat->ffacilities }}</td> 
      <td>{{$flat->fagree }}</td>
      <td>{{$flat->frent }}</td>
      <!-- <td>{{$flat->fb }}</td> -->
      <td> 
<!-- Button trigger modal -->
<button type="button" class=" fa fa-trash btn btn-danger" data-toggle="modal" data-target="#example3Modal">
  Delete 
</button>

<!-- Modal -->
<div class="modal fade" id="example3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:red;" class="modal-title" id="exampleModalLabel"><strong>Are you sure to delete ?</strong> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <p style="color:blue;" > <strong>Don't recover this information.Deleted information are still intact until they are written over.</strong></p>
        
      </div>
      <div class="modal-footer">
        <a href="{{ url ('delete/flat') }}/{{ $flat->id}}" class="btn btn-danger">Yes</a>
        <button type="button"  class="btn btn-primary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
          


<br>
<!--//////Edit///////-->
<!-- Button trigger modal -->
<button type="button" class="fa fa-edit btn btn-info" data-toggle="modal" data-target="#example2Modal">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="example2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="{{ url('edit/flat/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Flat</label>
<input type="hidden" name="flat_id" required value="{{$flat->id}}"> 
<input type="text" class="form-control" required name="fname" value="{{$flat->fname}}">
<br>
<!-- <div class="form-group">
<label>Room Image</label>
<input type="file" class="form-control"  name="fimage"  value="{{$flat->fimage}}">
<br>  -->
<div class="form-group">
<div class="form-group">
<label>Type</label>
<input type="text" class="form-control"  name="ftype" value="{{$flat->ftype}}">
<br>  
<div class="form-group">
<label>Flat Description</label>
<br> 
<br> 
<textarea  name="fdescrip" class="form-control" required rows="5" cols="45">{{$flat->fdescrip}}</textarea>
<br>
<br>  <label>Facilities</label>
<br> 
<br> 
<textarea  name="ffacilities" class="form-control" required rows="5" cols="45">{{$flat->ffacilities}}</textarea>
<br>
<br>  <label>Agreement</label>
<br> 
<br> 
<textarea  name="fagree" class="form-control" required rows="5" cols="45">{{$flat->fagree}}</textarea>
<br>
<br> 
<div class="form-group">
<label>Rent</label>
<input type="text" class="form-control" required name="frent" value="{{$flat->frent}}">
<br>
<br>
<!-- <div class="custom-control custom-checkbox custom-control-inline">
<input type="checkbox" class="custom-control-input" id="defaultInline1" name="fb"> 
<label class="custom-control-label" for="defaultInline1">Booking</label>
</div> -->
<button type="submit" class="btn btn-warning">Edit Flat</button>
</form>
</div>
</div>
</div>
</div>
</div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->
      </div>
    </div>
  </div>
</div>

       
      </td>
       
    </tr>
    @empty
     <tr class="text-center text-danger">
    <td colspan="8">Data Not Found!</td>
    </tr>
 @endforelse
</tbody>
</table>
</div>
</div> 
</div>
</div>
</div>
</div








<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-12">
<div class="card">
<div class="overflow-auto">
<div class="overflow-hidden">.
<div class="card-header bg-success">
Flat Checking
</div>
<div class="card-body">
</div>
<!-- @if(session('deletestatus'))
<div class="alert alert-danger">
{{ session('deletestatus')}}
</div>
@endif -->
<!--Button icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<table class="table table-bordered">
                           -------------All Booking Request------------
  <thead>
    <tr>    
      <th>Name</th>                          
      <th>Contract</th>                          
      <th>Flat</th>                                                 
      <th>Comment</th>                                                                                    
    </tr>
  </thead>
  <tbody>
  


  @forelse($bookings as $booking)
  <tr>

    <td>{{$booking->bname }}</td> 
    <td>{{$booking->bcontra }}</td> 
    <!-- <td>{{$booking->baddress}}</td>   
    <td>{{$booking->boccu }}</td> -->
    <td>{{$booking->bflat }}</td> 
    <td>{{$booking->bcom }}</td> 
  
  
  </tr>
    @empty
      <tr class="text-center text-danger">
      <td colspan="8">Data Not Found!</td>
      </tr>
  @endforelse


  
</tbody>
</table>
</div>
</div> 
</div>
</div>
</div>
</div>


























<!-- <br><br>
<br><br>
<br><br>
<br><br>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
<div style="border:1px solid black;width:1200px;height:400px;overflow:scroll;">
<style>
div.1 {
  position: fixed;
  
}
</style>
<header class="w3-container w3-teal" >
<div class="1">
  <h1>Chat to Client</h1>
  </div>
</header>
<div class="w3-panel">
  <ul id="list" class="w3-ul">

  </ul>
</div>
<form class="w3-panel" onsubmit="printMsg(event)">
      <p>
      <input id="msg"  value="" class="w3-input" type="text" placeholder="Type a message.....">
      </p>  
      <input type="button" class="w3-button w3-red" onclick="printMsg(event)" value="Submit"> 
    </form>
    
    <script>
      var list=document.getElementById('list');

      function printMsg(e){
      e.preventDefault();
      var message=document.getElementById('msg');
      list.innerHTML+='<li class="w3-red w3-panel w3-padding-16 w3-round-xxlarge">'+ message.value+'</li>'
      console.log(message.value);
      message.value= '';


      var x = 0;
$(document).ready(function(){
  $("div").scroll(function(){
    $("span").text( x+= 1);
  });
});
    }
    </script>
<br>
<br>
<br>



<footer class="w3-container w3-teal">
  <h1>Live</h1>
  </div>

</footer>

</body>
</html> -->







@endsection

