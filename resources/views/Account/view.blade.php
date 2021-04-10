@extends('layouts/app')
@section('content')





<!-- 
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="scrollable">
        <div class="table table-bordered">
          <thead>
            <tr>
              <td>No</td>
              <td>Name</td>
              <td>Price</td>
              <td>Quantity</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>001</td>
              <td>Pinky/td>
              <td>123/td>
              <td>6</td>
            </tr>
          </tbody>
        </div>
      </div>
    </div>
  </div>
</div>



 -->








<div class="container">
<div class="row">
<div class="col-lg-12">
<nav aria-label="breadcrumb">
  <!-- <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Back Dashboard</a></li>
  </ol> -->
</nav>
<div class="card">
<div class="card-header bg-success">
All Account Information
</div>
<div class="card-body">
</div>
@if(session('deletestatus'))
<div class="alert alert-danger">
{{ session('deletestatus')}}
</div>
@endif








<div style="overflow-x:auto;">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>    
        <th>CurrentBalance</th>
        <th>EmpSalary</th>
        <th>ElectriBill</th>
        <th>WaterBill</th>
        <th>GasBill</th>
        <th>ServiceCharge</th>    
        <th>Tax</th>          
        <th>Other Cost</th>  
        <th>Cost </th>
        <th>Action</th>    
        </tr>
    </thead>
    <tbody>

    
  <div class="col-12">
  <br>

  <div class="card">
  <!-- <div class="card-header bg-success"> -->
  <!--Button icon-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @forelse ($accounts as $account)
  <!-- $totalcost=array ($account=>account_salary+$account->account_electricity);
  echo "sum(totalcost)" .array_sum($totalcost)."\n"; -->
<?php
$totalcost=array($account->account_salary,$account->account_electricity,$account->account_water,$account->account_gas,$account->account_service,$account->account_tax,$account->account_other);
echo array_sum($totalcost);
?>

  <tr>
        <td>{{$account->account_date }}</td>      
        <td>{{$account->account_balance }}</td>
        <!-- <td>{{array_sum($totalcost)}}</td>    -->
        <td>{{$account->account_salary }}</td>
        <td>{{$account->account_electricity }}</td>
        <td>{{$account->account_water}}</td>
        <td>{{$account->account_gas}}</td>
        <td>{{$account->account_service }}</td>
        <td>{{$account->account_tax }}</td>
        <td>{{$account->account_other }}</td>
        <td>{{array_sum($totalcost)}}</td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ url ('delete/account') }}/{{ $account->id}}" class="fa fa-trash btn btn-danger"> </a>
        <a href="{{ url ('edit/account') }}/{{ $account->id}}" class="fa fa-edit btn btn-info"> </a>
        </div>
        </td>
    </tr>
    @empty
      <tr class="text-center text-danger">
      <td colspan="12">Data Not Found!</td>    </tr>
    
  @endforelse
  </tbody>
  </table>
  
</div>  

{{ $accounts->links()}}





<!--Add-->
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

@if ($errors->all())
<div class="alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{ $error }}</li>
@endforeach
</div>
@endif

<form action="{{ url('add/account/insert')}}" method="post">
@csrf
<div class="form-group">
    <label>Date</label>
    <input type="date" class="form-control"  name="account_date">
  <br> 
  <div class="form-group">
    <label>Current Balance</label>
    <input type="text" class="form-control" name="account_balance">
  <br>  

  <div class="form-group">
    <label>Cost</label>
    <input type="text" class="form-control" name="account_cost">
    <br> 
  <div class="form-group">
    <label>Employee Salary</label>
    <input type="text" class="form-control" name="account_salary">
    <br> 
    <div class="form-group">
    <label>Electricity Bill</label>
    <input type="text" class="form-control" name="account_electricity">
    <br> 
 
  <div class="form-group">
    <label>Water Bill</label>
    <input type="text" class="form-control"  name="account_water">
    <br> 
  <div class="form-group">
    <label>Gas Bill</label>
    <input type="text" class="form-control"  name="account_gas">
    <br> 
  <div class="form-group">
    <label>Service Charge</label>
    <input type="text" class="form-control"  name="account_service">
  <br> 
  <div class="form-group">
    <label>Tax</label>
    <input type="text" class="form-control"  name="account_tax">
  <br> 

   <div class="form-group">
    <label>Other Cost</label>
    <input type="text" class="form-control"  name="account_other">
  <br> 
  <button type="submit" class="btn btn-primary">Add Account</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection

