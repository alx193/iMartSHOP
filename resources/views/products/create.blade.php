@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>



<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id:</strong>
                <input type="text" name="id" class="form-control" placeholder="id">
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="Name" class="form-control" placeholder="Name">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="Price" class="form-control" placeholder="Product's Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="Weight" class="form-control" placeholder="Specify Weight">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="Description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <input type="text" name="Category" class="form-control" placeholder="Select Category">
            </div>
        </div>
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CREATED_AT:</strong>
                <input type="text" name="CREATED_AT" class="form-control" placeholder="CREATED_AT">
            </div> --}}
        {{-- </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="text" name="Stock" class="form-control" placeholder="Stock">
            </div>
        </div>
        {{-- Buton de submit --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection