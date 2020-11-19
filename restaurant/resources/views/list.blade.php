@extends('layout')
@section('content')
<h1>welcome to restaurants list</h1>
@if(Session::get('status'))
<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->
<p>{{Session::get('status')}}</p>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Restaurant Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
@stop