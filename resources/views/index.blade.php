@extends('parent')

@section('main')

<div align="right">
<a href="{{ route('crud.create')}}" class="btn btn-success btn-sm"Add</a>
</div>

@if($message = section::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
 
<table class="table table-bordered table-striped">
<tr>
<th width="10%">Image</th> 
<th width="35%">Name</th> 
<th width="35%">Email</th> 
<th width="30%">Action</th> 
</tr>
@foreach($data as $row) 
<tr>
<td><img src="{{ URL::to('/')}}images/{{$row->image
}}" class="img-thumbnail" width="75" /></td>
<td>{{ $row->name}}</td>
<td>{{ $row->email}}</td>
<td>

</td>
</tr>
@endforeach
</table>
{{!!$data->links()}}
@endsection