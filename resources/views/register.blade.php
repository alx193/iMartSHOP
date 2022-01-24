@extends('layout')
@section('content')
<body>
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
    <form action="login" method="POST">
    @csrf
     <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="User name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="Email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
     <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
    </div>
         <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</div>
</div>
</body>
@endsection