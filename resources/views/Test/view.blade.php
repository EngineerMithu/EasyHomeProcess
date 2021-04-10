@extends('layouts/app')
@section('content')
<div class="container">
<!-- <div class="row">
<div class="col-12">
<div class="card">
<div class="card-header bg-success"> -->
<!-- All Account Information
</div>
<div class="card-body">
</div>
<table class="table table-bordered "> -->
  <!-- <thead>
    <tr>
      <th>Date</th>    
      <th>CurrentBalance</th>
      <th>Cost </th>
      <th>EmpSalary</th>
      <th>ElectriBill</th>
      <th>WaterBill</th>
      <th>GasBill</th>
      <th>ServiceCharge</th>    
      <th>Tax</th>          
      <th>Other Cost</th>     
      <th>Action</th>    
       
        
      
      </tr>
  </thead>
  <tbody> -->

    <!-- </tr>
  </thead>
  <tbody>
  </tbody>
</table>

</div>
</div>
</div> -->
<!-- <div class="col-12">
<br>

<div class="card"> -->
<!-- <div class="card-header bg-success"> -->

 <!--  -->
     
  


<div class="card">
<div class="card-header bg-success">
Add Account Form
</div>
<div class="card-body">
@if(session('status'))
<div class="alert alert-success">
{{ session('status')}}
</div>
@endif

<form action="{{ url('add/test/insert')}}" method="post">
@csrf


  <div class="form-group">
    <label>Test</label>
    <input type="text" class="form-control"  name="test">
  <br>  





  <button type="submit" class="btn btn-primary">Add Test</button>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection





























