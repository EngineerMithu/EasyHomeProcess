@extends('layouts/app')  
@section('content')
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/employee/view')}}">Back Employee List</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-success">
Edit Employee Information
</div>
<div class="card-body">

<!--alert-->
@if(session('editstatus'))
<div class="alert alert-primary">
{{ session('editstatus')}}
</div>
@endif

<form action="{{ url('edit/employee/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Enroll</label>
<input type="hidden" name="employee_id" required value=" {{$single_employee_info->id}}"> 
<input type="text" class="form-control" required name="em_enroll" value="{{$single_employee_info->em_enroll}}" >
<br>
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="em_name" value="{{$single_employee_info->em_name}}">
<br>  

<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="em_con" value="{{$single_employee_info->em_con}}">
<br> 
<label>Present Address</label>
<textarea  name="em_address1" class="form-control" required row="3">{{$single_employee_info->em_address1}}</textarea>
<br> 
<label>Permanent Address</label>
<textarea  name="em_address" class="form-control" required row="3">{{$single_employee_info->em_address}} </textarea>
<br> 
<div class="form-group">
<label>NID Number</label>
<input type="text" class="form-control" required name="em_nid" value="{{$single_employee_info->em_nid}}">
<br> 
<button type="submit" class="btn btn-warning">Edit Employee</button>
</form>
</div>
</div>
</div>
</div>
</div>
  @endsection
