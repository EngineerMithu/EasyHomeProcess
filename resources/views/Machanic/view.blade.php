@extends('layouts/app')

@section('content')
<div class="container">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header bg-success">
All Account Information
</div>
<div class="card-body">
</div>



<table class="table table-bordered">
  <thead>
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
  <tbody>

    <!-- </tr>
  </thead>
  <tbody>
  </tbody>
</table>

</div>
</div>
</div> -->
<div class="col-12">
<br>

<div class="card">
<!-- <div class="card-header bg-success"> -->

 @forelse ($accounts as $account)
 <tr>
       <td>{{$account->account_date }}</td>      
       <td>{{$account->account_balance }}</td>
      <td>{{$account->account_cost}}</td>   
      <td>{{$account->account_salary }}</td>
     <td>{{$account->account_electricity }}</td>
       <td>{{$account->account_water}}</td>
      <td>{{$account->account_gas}}</td>
      <td>{{$account->account_service }}</td>
       <td>{{$account->account_tax }}</td>
      <td>{{$account->account_other }}</td>
      <td>
      <a href="{{ url ('delete/account') }}/{{ $account->id}}" class="btn btn-sm btn-danger">Delete</a>
      <a href="{{ url ('edit/account') }}/{{ $account->id}}" class="btn btn-info">Edit</a>
       
      </td>
      
   
   </tr>
   @empty
     <tr class="text-center text-danger">
    <td colspan="8">Data Not Found!</td>    </tr>
   
 @endforelse
</tbody>
 </table>
{{ $accounts->links()}}

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

<form action="{{ url('add/account/insert')}}" method="post">
@csrf
<div class="form-group">
    <label>Date</label>
    <input type="date" class="form-control" required name="account_date">
  <br> 
  <div class="form-group">
    <label>Current Balance</label>
    <input type="text" class="form-control" required name="account_balance">
  <br>  

  <div class="form-group">
    <label>Cost</label>
    <input type="text" class="form-control" required name="account_cost">
    <br> 
  <div class="form-group">
    <label>Employee Salary</label>
    <input type="text" class="form-control"required name="account_salary">
    <br> 
    <div class="form-group">
    <label>Electricity Bill</label>
    <input type="text" class="form-control"required name="account_electricity">
    <br> 
 
  <div class="form-group">
    <label>Water Bill</label>
    <input type="text" class="form-control" required name="account_water">
    <br> 
  <div class="form-group">
    <label>Gas Bill</label>
    <input type="text" class="form-control" required name="account_gas">
    <br> 
  <div class="form-group">
    <label>Service Charge</label>
    <input type="text" class="form-control" required name="account_service">
  <br> 
  <div class="form-group">
    <label>Tax</label>
    <input type="text" class="form-control" required name="account_tax">
  <br> 

   <div class="form-group">
    <label>Other Cost</label>
    <input type="text" class="form-control" required name="account_other">
  <br> 
  <button type="submit" class="btn btn-primary">Add Account</button>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection

