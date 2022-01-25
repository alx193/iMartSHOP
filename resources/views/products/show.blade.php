@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
       
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{  $product->Category  }}
            </div>
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Name:</strong>
            {{  $product->Name  }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{  $product->Description  }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                {{  $product->Price  }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                {{  $product->Image  }}
            </div>
        </div>

        <br><br>
        <form action="add_to_cart" method="POST">
        @csrf
        @method('PUT')
            <input type="hidden" name="product_id" value={{ $product['id'] }}>
         <button class="btn btn-primary">Add to cart</button>
        </form>  
        <br><br> 
        <button class="btn btn-success">Buy Now</button>
        <br><br>

    </div>
@endsection