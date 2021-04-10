@extends('layouts/app')  
@section('content')
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/proposal/view')}}">Back Proposal List</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-success">
Edit Tenant Proposal Information
</div>
<div class="card-body">

<!--alert-->
@if(session('editstatus'))
<div class="alert alert-primary">
{{ session('editstatus')}}
</div>
@endif


  <form action="{{ url('edit/proposal/insert')}}" method="post">
@csrf
<div class="form-group">
<input type="hidden" name="proposal_id" required value=" {{$single_proposal_info->id}}"> 
@csrf
    <label>Facilities</label>
    <textarea  name="tenant_facilities" class="form-control" required rows="8" cols="4">{{$single_proposal_info->tenant_facilities}}</textarea>
    <br> 
    <label>Agreement</label>
    <textarea  name="tenant_agreem" class="form-control" required rows="8" cols="4">{{$single_proposal_info->tenant_agreem}}</textarea>
    <br> 
    <br> 
  <div class="form-group">
    <input type="checkbox" required name="tenant_agree">
    <label>Agree</label>
    <br> 
    <br>
<button type="submit" class="btn btn-warning">Edit Proposal</button>
</form>
</div>
</div>
</div>
</div>
</div>
  @endsection
