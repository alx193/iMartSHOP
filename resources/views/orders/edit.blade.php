@extends('orders.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Order</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('orders.update',$order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Costumer Name:</strong>
                    <input type="text" name="customer_id" value="{{ $order->customer_id }}" class="form-control" placeholder="Costumer Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ammount:</strong>
                    <input type="text" name="ammount" value="{{ $order->ammount }}" class="form-control" placeholder="ammount">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>address:</strong>
                    <input type="text" name="address" value="{{ $order->address }}" class="form-control" placeholder="address">
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                    <strong>status:</strong>
                    <input type="text" name="status" value="{{ $order->status }}" class="form-control" placeholder="status">
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection