@extends('layouts/app')
@section('content')
<!--view-->
<!--Button icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-12">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Back Dashboard</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-primary">
All Employee Information
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
      <th>Photo</th>
      <th>Enrolled</th>      
      <th>Class & Name</th>
      <th>Contract</th>
      <th>Present Address</th>
      <th>Permanent Address</th>
      <th>NID Number</th>  
      <th>Action</th>      
    </tr>
  </thead>
  <tbody>

@forelse ($employees as $employee)
 <tr>
 <td>
       <img src="{{asset('uploads/employee_photos')}}/{{$employee->em_image}}" alt="Not Found!" width="50">
      </td>
      <td>{{$employee->em_enroll }}</td> 
      <td>{{$employee->em_name }}</td>
      <td>{{$employee->em_con}}</td>   
      <td>{{$employee->em_address1 }}</td>
      <td>{{$employee->em_address }}</td> 
      <td>{{$employee->em_nid }}</td>
   
     

      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{ url ('delete/employee') }}/{{ $employee->id}}" class="fa fa-trash btn btn-danger"> </a>
      <a href="{{ url ('edit/employee') }}/{{ $employee->id}}" class=" fa fa-edit btn btn-info"> </a>
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
{{ $employees->links() }}
</div>
</div>
</div>









<!--Add-->
<br>
<div class="container">
<div class="row">
<div class="col-8 offset-2">
<div class="card">
<div class="card-header bg-success">
Add Employee
</div>
<div class="card-body">

<!--alert-->
@if(session('status'))
<div class="alert alert-success">
{{ session('status')}}
</div>
@endif

<form action="{{ url('add/employee/insert')}}" method="post" enctype="multipart/form-data">
@csrf
 <div class="form-group">
<label>Employee Image</label>
<input type="file" class="form-control"  name="em_image">
<br> 
 <div class="form-group">
<label>Enrolled Date</label>
<input type="date" class="form-control" required name="em_enroll">
<br> 
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="em_name">
<br>  
<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="em_con">
<br>
<div class="form-group">
<label>Present Address</label>
<textarea  name="em_address1" class="form-control" required row="3"></textarea>
<br> 
<div class="form-group">
<label>Permanent Address</label>
<textarea  name="em_address" class="form-control" required row="3"></textarea>
<br> 
<div class="form-group">
<label>NID Number</label>
<input type="text" class="form-control" required name="em_nid">
<br>  
<button type="submit" class="btn btn-primary">Add Employee</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection