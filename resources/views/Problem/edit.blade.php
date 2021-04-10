@extends('layouts/app')  
@section('content')
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('add/problem/view')}}">Back Problem List</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-success">
Edit Problem Information
</div>
<div class="card-body">

<!--alert-->
@if(session('editstatus'))
<div class="alert alert-primary">
{{ session('editstatus')}}
</div>
@endif

<form action="{{ url('edit/problem/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Date</label>
<input type="hidden" name="problem_id"  value=" {{$single_problem_info->id}}"> 
<input type="text" class="form-control" required name="pro_date" value=" {{$single_problem_info->pro_date}}">
<br> 
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="pro_name" value=" {{$single_problem_info->pro_name}}">
<br>
<div class="form-group">
<label>Class</label>
<input type="text" class="form-control" required name="pro_class" value=" {{$single_problem_info->pro_class}}">
<br>  
<div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="pro_con" value=" {{$single_problem_info->pro_con}}">
<br>
<label>Problem</label>
<textarea  name="pro_blem" class="form-control" required rows="8" cols="4">{{$single_problem_info->pro_blem}}</textarea>
<br> 
<br> 
<button type="submit" class="btn btn-warning">Edit Problem</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
