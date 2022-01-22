@extends('order_details.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Order Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('order_details.index') }}"> Back</a>
        </div>
    </div>
</div>
<form action="{{ route('order_details.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>order_id:</strong>
                <input type="text" name="order_id" class="form-control" placeholder="order_id">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>product_id:</strong>
                <input type="text" name="product_id" class="form-control" placeholder="product_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <input type="text" name="price" class="form-control" placeholder="price">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>quantity:</strong>
                <input type="text" name="quantity" class="form-control" placeholder="quantity">
            </div>
        </div>
        {{-- Buton de submit --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection