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
Tenant Proposal
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
      <th>Facilities</th>
      <th>Agreement</th>
      <th>Agree</th>                          
      <th>Action</th>      
    </tr>
  </thead>
  <tbody>
<!--Button icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 @forelse ($proposals as $proposal)
 <tr>
       <td>{{$proposal->tenant_facilities }}</td>    
       <td>{{$proposal->tenant_agreem }}</td>    
       <td>{{$proposal->tenant_agree }}</td>   

      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <a href="{{ url ('delete/proposal') }}/{{ $proposal->id}}" class="fa fa-trash btn btn-danger"> </a>
      <a href="{{ url ('edit/proposal') }}/{{ $proposal->id}}" class="fa fa-edit btn btn-info"> </a>
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
{{ $proposals->links()}}











<!--Add-->
<br>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<div class="card">
<div class="card-header bg-success">
 Proposal
</div>
<div class="card-body">

@if(session('status'))
<div class="alert alert-success">
{{ session('status')}}
</div>
@endif
<form action="{{ url('add/proposal/insert')}}" method="post">
@csrf
    <label>Facilities</label>
    <textarea  name="tenant_facilities" class="form-control" required rows="8" cols="4"></textarea>
    <br> 
    <label>Agreement</label>
    <textarea  name="tenant_agreem" class="form-control" required rows="8" cols="4"></textarea>
    <br> 
    <br> 
  <div class="form-group">
    <input type="checkbox" required name="tenant_agree">
    <label>Agree</label>
    <br> 
    <br>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
