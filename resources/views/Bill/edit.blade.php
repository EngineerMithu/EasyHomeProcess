@extends('layouts/app')  
@section('content')
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/bill/view')}}">Back Bill List</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-success">
Bill Tenant Information
</div>
<div class="card-body">

<!--alert-->
  @if(session('editstatus'))
  <div class="alert alert-primary">
  {{ session('editstatus')}}
  </div>
  @endif
<form action="{{ url('edit/bill/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Date *</label>
<input type="hidden" name="bill_id" required value=" {{$single_bill_info->id}}"> 
<input type="date" class="form-control" required name="bill_date" value="{{$single_bill_info->bill_date}}" >
<br>
<label>Name *</label>
<input type="text" class="form-control" required name="bill_name" value="{{$single_bill_info->bill_name}}">
<br>  
<div class="form-group">
<label>Flat Rentals *</label>
<input type="text" class="form-control" required name="bill_ren" value="{{$single_bill_info->bill_ren}}">
<br>  
<div class="form-group">
<label>Electricity Bill *</label>
<input type="text" class="form-control" required name="bill_ele" value="{{$single_bill_info->bill_ele}}">
<br>
<div class="form-group">
<label>Gas Bill*</label>
<input type="text" class="form-control" required name="bill_gas" value="{{$single_bill_info->bill_gas}}">
<br> 
<div class="form-group">
<label>Water Bill*</label>
<input type="text" class="form-control" required name="bill_wat" value="{{$single_bill_info->bill_wat}}">
<br> 
<div class="form-group">
<label>Service Charge</label>
<input type="text" class="form-control"  name="bill_char" value="{{$single_bill_info->bill_char}}">
<br> 
<div class="form-group">
<label>Due</label>
<input type="text" class="form-control"  name="bill_due" value="{{$single_bill_info->bill_due}}">
<br>
<div class="form-group">
<label>Total</label>
<input type="text" class="form-control"  name="bill_tot" value="{{$single_bill_info->bill_tot}}"> 
<br> 
     
      <button type="submit" class="btn btn-warning">Edit Bill</button>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
@endsection
