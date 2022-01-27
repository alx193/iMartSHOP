@extends('categories.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders</h2>
            </div>
            <div class="pull-right">
                <a class="btn-success" href="{{ route('orders.create') }}">Create new order </a>
            </div>
        </div>
    </div>

<table class="table table-bordered">
    <tr>
        <th>Customer Name</th>
        <th>Ammount</th>
        <th>Address</th>
        <th>Status</th>
        <th width="300px">Action</th>
    </tr>
@foreach ($orders as $order)
    <tr>
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $order->customer_id }}</td>
        <td>{{ $order->ammount }}</td>
        <td>{{ $order->address }}</td>
        <td>{{ $order->status }}</td>
        <td>
            <form action="{{ route('orders.destroy', $order->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('orders.show', $order->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('orders.edit', $order->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="Submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $orders->links() !!}

@endsection