@extends('categories.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn-success" href="{{ route('products.create') }}">Create new product</a>
            </div>
        </div>
    </div>

<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Price</th>
        <th>Weight</th>
        <th>Description</th>
        <th>Category</th>
        <th>Stock</th>
        <th width="300px">Action</th>
    </tr>
@foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->Name }}</td>
        <td>{{ $product->Price }}</td>
        <td>{{ $product->Weight }}</td>
        <td>{{ $product->Description }}</td>
        <td>{{ $product->Category }}</td>
        <td>{{ $product->Stock }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="Submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection