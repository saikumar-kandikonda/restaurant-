
@extends('layout')
@section('content')
<h1>welcome to add restuarant page</h1>
<br><br>
<div class="col-sm-6">
<form method="post" action="add">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Restuarant name</label>
    <input type="text" class="form-control" name="name"id="name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email"aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="address here">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop