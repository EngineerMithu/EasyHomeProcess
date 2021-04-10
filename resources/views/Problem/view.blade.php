@extends('layouts/app')
@section('content')
<!--view-->
<div class="col-12">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Back Dashboard</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-primary">
Complain
</div>
<div class="card-body">

@if(session('deletestatus'))
<div class="alert alert-danger">
{{ session('deletestatus')}}
</div>
@endif

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Date</th>
      <th>Name</th>
      <th>Class</th>      
      <th>Contract</th>   
      <th>Problem</th>                                                       
      <th>Action</th>           
    </tr>
  </thead>
  <tbody>
  <!--Button icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@forelse ($Problems as $problem)
 <tr>
            <td>{{$problem->pro_date}}</td>    
            <td>{{$problem->pro_name }}</td>    
            <td>{{$problem->pro_class }}</td>   
            <td>{{$problem->pro_con }}</td>   
            <td>{{$problem->pro_blem}}</td>   
            <td>
            <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
<!-- Button trigger modal -->
<button type="button" class=" fa fa-trash btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Delete 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:red;" class="modal-title" id="exampleModalLabel"><strong>Are you sure to delete ?</strong> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <p style="color:green;" > <strong>Don't recover this information.Deleted information are still intact until they are written over.</strong></p>
        
      </div>
      <div class="modal-footer">
        <a href="{{ url ('delete/problem') }}/{{ $problem->id}}" class="btn btn-danger">Yes</a>
        <button type="button"  class="btn btn-primary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
          





























<!--//////Edit///////-->
<!-- Button trigger modal -->
<!-- <button type="button" class="fa fa-edit btn btn-primary" data-toggle="modal" data-target="#example2Modal">
  Edit
</button> -->

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

<form action="{{ url('add/problem/insert')}}" method="post" enctype="multipart/form-data">  
@csrf
<div class="form-group">
<label>Date</label>
<input type="hidden" name="problem_id" value="{{$problem->id}}"> 
<input type="text" class="form-control" required name="pro_date" value="{{$problem->pro_date}}">
<br> 
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="pro_name" value="{{$problem->pro_name}}">
<br>
<div class="form-group">
<label>Class</label>
<input type="text" class="form-control" required name="pro_class" value="{{$problem->pro_class}}">
<br>  
<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="pro_con" value="{{$problem->pro_con}}">
<br>
<label>Problem</label>
<textarea  name="pro_blem" class="form-control" required rows="8" cols="4">{{$problem->pro_blem}}</textarea>
<br> 
<br> 
<button type="submit" class="btn btn-warning">Edit Problem</button>
</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->
      </div>
    </div>
  </div>
</div>



            <!-- </div> -->
            </td>
   </tr>
   @empty
     <tr class="text-center text-danger">
    <td colspan="8">Data Not Found!</td>  
    </tr>
@endforelse

  </tbody>
</table>
{{ $Problems->links() }}

























































<!--Add-->
<br>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<div class="card">
<div class="card-header bg-success">
 Problem
</div>
<div class="card-body">

@if(session('addstatus'))
<div class="alert alert-success">
{{ session('addstatus')}}
</div>
@endif
<form action="{{ url('add/problem/insert')}}" method="post">
@csrf

<div class="form-group">
<label> Date</label>
<input type="date" class="form-control" required name="pro_date">
<br> 
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="pro_name">
<br>
<div class="form-group">
<label>Class</label>
<input type="text" class="form-control" required name="pro_class">
<br>  
<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="pro_con">
<br>
<label>Problem</label>
<textarea  name="pro_blem" class="form-control" required rows="8" cols="4"></textarea>
<br> 
<br> 
<button type="submit" class="btn btn-primary"> Add </button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection


