@extends('categories.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Categories</h2>
            </div>
            <div class="pull-right">
                <a class="btn-success" href="{{ route('categories.create') }}">Create new category</a>
            </div>
        </div>
    </div>

<table class="table table-bordered">
    <tr>
        <th>Category Name</th>
        <th>Description</th>
        <th>Stock</th>
        <th width="300px">Action</th>
    </tr>
@foreach ($categories as $category)
    <tr>
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $category->Name }}</td>
        <td>{{ $category->Description }}</td>
        <td>{{ $category->Stock }}</td>
        <td>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>

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