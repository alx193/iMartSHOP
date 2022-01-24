<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>iMartSHOP</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/">iMartSHOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarNav">
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
          <li><a href="/register">Register</a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  


  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>