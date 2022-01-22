@extends('order_details.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>order_details</h2>
            </div>
            <div class="pull-right">
                <a class="btn-success" href="{{ route('order_details.create') }}">Create new order detail</a>
            </div>
        </div>
    </div>

<table class="table table-bordered">
    <tr>
        <th>order_id</th>
        <th>product_id</th>
        <th>price</th>
        <th>quantity</th>
        <th width="300px">Action</th>
    </tr>
@foreach ($categories as $category)
    <tr>
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $order_detail->order_id }}</td>
        <td>{{ $order_detail->product_id }}</td>
        <td>{{ $order_detail->price }}</td>
        <td>{{ $order_detail->quantity }}</td>
        <td>
            <form action="{{ route('order_details.destroy', $order_detail->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('order_details.show', $order_detail->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('order_details.edit', $order_detail->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="Submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $categories->links() !!}

@endsection