@extends('orders.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Order</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
       
       {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>costumer_id:</strong>
                {{  $orders->costumer_id  }}
            </div>
        </div> --}}
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>ammount:</strong>
            {{  $order->ammount  }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>address:</strong>
                {{  $order->address  }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status:</strong>
                {{  $order->status  }}
            </div>
        </div>
    </div>
@endsection