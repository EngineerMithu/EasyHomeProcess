@extends('layouts/app')  
@section('content')
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/tenant/view')}}">Back Tenant List</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-success">
Edit Tenant Information
</div>
<div class="card-body">

<!--alert-->
@if(session('editstatus'))
<div class="alert alert-primary">
{{ session('editstatus')}}
</div>
@endif

<form action="{{ url('edit/tenant/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Enroll</label>
<input type="hidden" name="tenant_id" required value=" {{$single_tenant_info->id}}"> 
<input type="text" class="form-control" required name="tenant_enroll" value="{{$single_tenant_info->tenant_enroll}}" >
<br>
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="tenant_name" value="{{$single_tenant_info->tenant_name}}">
<br>  

<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="tenant_phone" value="{{$single_tenant_info->tenant_phone}}">
<br> 
<label>Present Address</label>
<textarea  name="tenant_address1" class="form-control" required row="3">{{$single_tenant_info->tenant_address1}}</textarea>
<br> 
<label>Permanent Address</label>
<textarea  name="tenant_address" class="form-control" required row="3">{{$single_tenant_info->tenant_address}} </textarea>
<br> 
<div class="form-group">
<label>NID Number</label>
<input type="text" class="form-control" required name="tenant_nid" value="{{$single_tenant_info->tenant_nid}}">
<br> 
<div class="form-group">
<label>Occupation</label>
<input type="text" class="form-control" required name="tenant_occu" value="{{$single_tenant_info->tenant_occu}}">
<br> 
<div class="form-group">
<label>Member</label>
<input type="number" class="form-control" required name="tenant_family" value="{{$single_tenant_info->tenant_family}}">
<br> 
<button type="submit" class="btn btn-warning">Edit Tenant</button>
</form>
</div>
</div>
</div>
</div>
</div>
  @endsection
