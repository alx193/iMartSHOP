@extends('categories.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customers</h2>
            </div>
            <div class="pull-right">
                <a class="btn-success" href="{{ route('customers.create') }}">Create new Customer</a>
            </div>
        </div>
    </div>

<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Billing Address</th>
        <th>Shipping Address</th>
        <th>Country</th>
        <th>Phone</th>
        <th width="300px">Action</th>
    </tr>
@foreach ($customers as $customer)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $customer->full_name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->billing_address }}</td>
        <td>{{ $customer->shipping_address }}</td>
        <td>{{ $customer->country }}</td>
        <td>{{ $customer->phone }}</td>
        <td>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('customers.show', $customer->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="Submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $customers->links() !!}

@endsection