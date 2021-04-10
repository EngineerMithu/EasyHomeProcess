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
All Renter Information
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
      <th>Name</th>
      <th>Contract</th>
      <th>Present Address</th>
      <th>Permanent Address</th>
      <th>NID Number</th>
      <th>Occupation</th>
      <th>Member</th>      
      <th>Action</th>      
    </tr>
  </thead>
  <tbody>


 @forelse ($tenants as $tenant)
 <tr>
 <td>
       <img src="{{asset('uploads/tenant_photos')}}/{{$tenant->tenant_image}}" alt="Not Found!" width="50">
      </td>
      <td>{{$tenant->tenant_enroll }}</td> 
      <td>{{$tenant->tenant_name }}</td>
      <td>{{$tenant->tenant_phone}}</td>   
      <td>{{$tenant->tenant_address1 }}</td>
      <td>{{$tenant->tenant_address }}</td> 
      <td>{{$tenant->tenant_nid }}</td>
      <td>{{$tenant->tenant_occu }}</td>
      <td>{{$tenant->tenant_family}}</td>
      
     

      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{ url ('delete/tenant') }}/{{ $tenant->id}}" class="fa fa-trash btn btn-danger"> Delete</a>
      <a href="{{ url ('edit/tenant') }}/{{ $tenant->id}}" class=" fa fa-edit btn btn-info"> Edit</a>
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
{{ $tenants->links() }}
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
Add Tenant 
</div>
<div class="card-body">

<!--alert-->
@if(session('status'))
<div class="alert alert-success">
{{ session('status')}}
</div>
@endif

<form action="{{ url('add/tenant/insert')}}" method="post" enctype="multipart/form-data">
@csrf

 <div class="form-group">
    <label>Tenant Image</label>
    <input type="file" class="form-control"  name="tenant_image">
    <br> 

 <div class="form-group">
<label>Enrolled Date</label>
<input type="date" class="form-control" required name="tenant_enroll">
<br> 
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="tenant_name">
<br>  
<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="tenant_phone">
<br>
<div class="form-group">
<label>Present Address</label>
<textarea  name="tenant_address1" class="form-control" required row="3"></textarea>
<br> 
<div class="form-group">
<label>Permanent Address</label>
<textarea  name="tenant_address" class="form-control" required row="3"></textarea>
<br> 
<div class="form-group">
<label>NID Number</label>
<input type="text" class="form-control" required name="tenant_nid">
<br> 
<div class="form-group">
<label>Occupation</label>
<input type="text" class="form-control" required name="tenant_occu">
<br> 
<div class="form-group">
<label>Family Member</label>
<input type="number" class="form-control" required name="tenant_family">
<br> 
<button type="submit" class="btn btn-primary">Add Tenant</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection