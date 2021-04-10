@extends('parent')

@section('main')

@if($erros->any())
<div class="alert alert-danger">
<ul>
@foreeach($erros->all() as $erros)
<li>{{ $erros}}</li>
$endforeach
</ul>
</div>
@endif


<div align="right">
<a href="{{ route('crud.index')}}" class="btn btn-default"Back></a>
</div>

<form method="post" action="{{ route('crud.store')}}" enctype="
multipart/form-data">
@csrf
<div class="forn-group">
<level class="col-md-4 text-right">Name</lavel>
<div class="col-md-8">
<input type="text" name="f_name" class="
form-control input-lg"/>
</div>
</div>


<div class="forn-group">
<level class="col-md-4 text-right">Email</lavel>
<div class="col-md-8">
<input type="text" name="email" class="
form-control input-lg"/>
</div>
</div>


<div class="forn-group">
<level class="col-md-4 text-right">Select Image</lavel>
<div class="col-md-8">
<input type="file" name="image"/>
</div>
</div>
<br/>
<br/>
<br/>
<div class="form-group text-center">
<input type="submit" name="add" class="btn btn-primary
input-lg" value="Add"/>
</div>
</form>

@endsection