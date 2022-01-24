<!DOCTYPE html>
<html>
<head>

{{-- Navigation bar implementation --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">iMartSHOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
          </li>
        </ul>
        @if(Session::has('user'))
            <li class="dropdown">
            
              <a class="dropdown-toggle" data-toggle="dropdown" data-bs-toggle="dropdown" href="#">{{Session::get('user')['name']}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="/logout">Logout</a></li>
                </ul>
             </li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
      </div>
    </div>
  </nav>

    <title>Orders </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @yield('content')
</div>

</body>
</html>