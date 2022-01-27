@extends('layout')
@section('content')
<body>
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
    <div class="container" style=" border-radius: 30px; position: absolute; width: 550px; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #c3d4a5; ">
            <form action="login" method="POST" style="witdh: 500px; margin-bottom: 20px; margin-top: 20px; ">
            <div class="form-group" >

            @csrf
                <label for="exampleInputEmail1"><strong>Email address</strong></label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><strong>Password</strong></label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
            </div>
                <button type="submit" class="btn btn-primary"><strong>Login</strong></button>
            </form>
    </div>
</div>
</div>
</div>
</body>
@endsection