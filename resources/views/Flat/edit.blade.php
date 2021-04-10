@extends('layouts/app')  
@section('content')
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/flat/view')}}">Back All Flat List</a></li>
  </ol>
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

<form action="{{ url('edit/flat/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Flat</label>
<input type="hidden" name="flat_id" required value=" {{$single_flat_info->id}}"> 
<input type="text" class="form-control" required name="fname" value="{{$single_flat_info->fname}}">
<br>
<div class="form-group">
<label>Room Image</label>
<input type="file" class="form-control"  name="fimage" {{$single_flat_info->fimage}} >
<br> 
<div class="form-group">
<div class="form-group">
<label>Type</label>
<input type="text" class="form-control"  name="ftype" value="{{$single_flat_info->ftype}}">
<br>  
<div class="form-group">
<label>Flat Description</label>
<br> 
<br> 
<textarea  name="fdescrip" class="form-control" required rows="5" cols="45">{{$single_flat_info->fdescrip}}</textarea>
<br>
<br>  <label>Facilities</label>
<br> 
<br> 
<textarea  name="ffacilities" class="form-control" required rows="5" cols="45">{{$single_flat_info->ffacilities}}</textarea>
<br>
<br>  <label>Agreement</label>
<br> 
<br> 
<textarea  name="fagree" class="form-control" required rows="5" cols="45">{{$single_flat_info->fagree}}</textarea>
<br>
<br> 
<div class="form-group">
<label>Rent</label>
<input type="text" class="form-control" required name="frent" value="{{$single_flat_info->frent}}">
<br>
<br>
<div class="custom-control custom-checkbox custom-control-inline">
<input type="checkbox" class="custom-control-input" id="defaultInline1" name="fb" {{$single_flat_info->fb}}> 
<label class="custom-control-label" for="defaultInline1">Booking</label>
</div>
<br>
<br>
<br>
<br> 
<button type="submit" class="btn btn-warning">Edit Flat</button>
</form>
</div>
</div>
</div>
</div>
</div>
  @endsection
