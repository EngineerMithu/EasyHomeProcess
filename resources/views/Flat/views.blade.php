@extends('layouts/app')
@section('content')
<div class="container">
<div class="row">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-12">
<nav aria-label="breadcrumb">
<!-- <ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ url('tenant/dashboard')}}">Back Dashboard</a></li>
</ol> -->
</nav>
<div class="card">
<div class="overflow-auto">
<div class="overflow-hidden">.
<div>

@if(session('addstatus'))
<div class="alert alert-primary">
{{ session('addstatus')}}
</div>
@endif
</div>
<div class="card-body">
</div>
@if(session('deletestatus'))
<div class="alert alert-danger">
{{ session('deletestatus')}}
</div>
@endif
<!--Button icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<table class="table table-bordered">
                           -------------All Flats------------

  <br>
  <thead>
    <tr class="bg-success" class="striped" >    
      <th>Flat</th>                          
      <th>Image</th>                          
      <th>Type</th>                          
      <th>Description</th>                          
      <th>Facilities</th>                           
      <th>Agreement</th>                                                         
      <th>Rent</th>           
      <th>Action</th>           
    </tr>
  </thead>
  <tbody>
  @forelse ($flats as $flat)
 <tr >
      <td >{{$flat->fname }}</td> 
      <!-- <td>{{$flat->fimage }}</td> -->
      <td>
       <img src="{{asset('uploads/flatroom_photos')}}/{{$flat->fimage1}}" alt="Not Found!" width="80">
      </td>
      <td>{{$flat->ftype}}</td>   
      <td>{{$flat->fdescrip }}</td>
      <td>{{$flat->ffacilities }}</td> 
      <td>{{$flat->fagree }}</td>
      <td>{{$flat->frent }}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">







<!--Start Angular-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!-- Start Modal -->
<!-- Button trigger modal -->
<button mat-button type="button" name="{{$flat->id}}" ng-click="showFlat($event)" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
  Booking
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form ng-app="myApp" ng-controller="myCtrl" action="{{ url('add/bookingreq/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" value="<%flatComment.name%>" required name="bname">
<br><div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" value="<%flatComment.contact%>" required name="bcontra">
<br>
<label>Flat</label>
<input type="text" class="form-control" value="<%flatComment.flatNo%>" required name="bflat">
<br>
<div class="form-group">
<label>Comment</label>
<textarea  name="bcom" class="form-control" rows="3" cols="20"><%flatComment.comment%></textarea>
<br>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Send Request</button>
 
      </div>
    </div>
  </div>
</div>
</form>




<script>
var app = angular.module('myApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('myCtrl', function($scope, $http) {
  $scope.showFlat = function(e) {
    console.log(e.target.name);
    $http({
    method: 'GET',
    url: 'http://127.0.0.1:8000/api/flats' })
    .then(function successCallback(res) {
      $scope.flatComment = res.data.data[0];
      console.log(res.data.data[0])
    }, function errorCallback(response) {
      console.log(response.status);
    });
  }
  $scope.flatComment = {
    name: 'Mithu Hasan',
    contact: '01939483940',
    flatNo: '201C',
    comment: 'I need this flat'
  };
});
</script>





</div>
</div>
</div>
</div>
</div>
<!-- End Modal -->
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
</div>
</div> 
</div>
</div>
</div>
</div>



  




















































<!--Add-->
<!-- <br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-8 offset-2">
<div class="card">
<div class="card-header bg-success">
Booking Request
</div>
<div class="card-body">
<br> -->

<!--alert-->
<!-- @if(session('addstatus'))
<div class="alert alert-success">
{{ session('addstatus')}}
</div>
@endif

<form action="{{ url('add/bookingreq/insert')}}" method="post">
@csrf
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" required name="bname">
<br><div class="form-group">
<label>Contract</label>
<input type="text" class="form-control" required name="bcontra">
<br>
<div class="form-group">
<label>Address</label>
<br> 
<br> 
<textarea  name="baddress" class="form-control" required rows="5" cols="45"></textarea>
<br>
<div class="form-group">
<label>Occupation</label>
<input type="text" class="form-control" required name="boccu">
<br>
<div class="form-group">
<label>Comment</label>
<br> 
<br> 
<textarea  name="bcom" class="form-control" required rows="5" cols="45"></textarea>
<br>
<button type="submit" class="btn btn-primary">Add Request</button>
</form>
</div>
</div>
</div>
</div>
</div> -->

@endsection






































































 <!-- <!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>W3.CSS Login Modal</h2>

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="public\img\admin.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
            
</body>
</html> -->
