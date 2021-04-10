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
<div class="card-header bg-success overflow-auto">
Billing Information
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
      <th>Date</th>                          
      <th>Name</th>           
      <th>FlatRent</th>      
      <th>EleBill</th> 
      <th>GasBill</th>          
      <th>WaterBill</th>          
      <th>Charge</th>          
      <th>Due</th>          
      <th>Total</th>                         
      <th>Action</th>      
    </tr>
  </thead>
  <tbody>
        @forelse($bills as $bill)
            <tr>
            <td>{{$bill->bill_date }}</td>   
            <td>{{$bill->bill_name}}</td>   
            <td>{{$bill->bill_ren }}</td>   
            <td>{{$bill->bill_ele }}</td>   
            <td>{{$bill->bill_gas }}</td>   
            <td>{{$bill->bill_wat }}</td>   
            <td>{{$bill->bill_char}}</td>   
            <td>{{$bill->bill_due}}</td>   
            <td>{{$bill->bill_tot}}</td>   

  <!-- $totalVolume= $bills->sum(function($bill)){ 
            return $bills->length * $bills->width;           
           } -->

            <td>
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ url ('delete/bill') }}/{{ $bill->id}}" class="fa fa-trash btn btn-danger"> Delete</a>
            <a href="{{ url ('edit/bill') }}/{{ $bill->id}}" class=" fa fa-edit btn btn-primary">  Edit</a>
            </div>
            </td>
            </tr>
            @empty
            <tr class="text-center text-danger">
            <td colspan="8">Data Not Found!</td>  
        @endforelse
  </tbody>
</table>
{{ $bills->links() }}

</div>
</div>









<!--Add-->
<br>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<div class="card">
<div class="card-header bg-success">
 Bill Generation
</div>
<div class="card-body">
@if(session('status'))
<div class="alert alert-success">
{{ session('status')}}
</div>
@endif


<form action="{{ url('add/bill/insert')}}" method="post" enctype="multipart/form-data">
@csrf
<label>Date * </label>
<input type="date" class="form-control" required name="bill_date">
<br>
<div class="form-group">
<label>Name *</label>
<input type="text" class="form-control" required name="bill_name">
<br>  
<div class="form-group">
<label>Flat Rentals *</label>
<input type="text" class="form-control" required name="bill_ren">
<br>  
<div class="form-group">
<label>Electricity Bill *</label>
<input type="text" class="form-control" required name="bill_ele">
<br>
<div class="form-group">
<label>Gas Bill*</label>
<input type="text" class="form-control" required name="bill_gas">
<br> 
<div class="form-group">
<label>Water Bill*</label>
<input type="text" class="form-control" required name="bill_wat">
<br> 
<div class="form-group">
<label>Service Charge</label>
<input type="text" class="form-control"  name="bill_char">
<br> 
<div class="form-group">
<label>Due</label>
<input type="text" class="form-control"  name="bill_due">
<br>
<div class="form-group">
<label>Total</label>
<input type="text" class="form-control" id="summation" id="sum" name="bill_tot" value="">
<br> 
<button type="submit" name="s1"  value="sum" class="btn btn-primary">Total Bill</button>
</form>

</div>
</div>
</div>
</div>
</div>









<html>
	<head>
		<title>Sum Html Textbox Values using jQuery/JavaScript</title>
		<style>
			body {
				font-family: sans-serif;
			}
			#summation {
				font-size: 18px;
				font-weight: bold;
				color:#174C68;
			}
			.txt {
				background-color: #FEFFB0;
				font-weight: bold;
				text-align: right;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	</head>
	<body>
<table width="300px" border="1" style="border-collapse:collapse;background-color:#E8DCFF">
	<tr>
		<td width="40px">1</td>
		<td>Butter</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Cheese</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Eggs</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>4</td>
		<td>Milk</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>5</td>
		<td>Bread</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr>
		<td>6</td>
		<td>Soap</td>
		<td><input class="txt" type="text" name="txt"/></td>
	</tr>
	<tr id="summation">
		<td>&nbsp;</td>
		<td align="right">Sum :</td>
		<td align="center"><span id="sum">0</span></td>
	</tr>
</table>


<script>
	$(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".txt").each(function() {

			$(this).keyup(function(){
				calculateSum();
			});
		});

	});

	function calculateSum() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum").html(sum.toFixed(2));
	}
</script>
</body>
</html>





















@endsection
