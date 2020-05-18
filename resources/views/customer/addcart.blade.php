@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4"></div>
        <form method="POST" action="{{ route('cart.additemcart') }}">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <div class="card-header">
                        <input type="text" name="iid" value="{{ $items->iid }}" hidden>
                        {{ $items->iname }}
                      </div>
                  <h5 class="card-title">{{ $items->iprice }}</h5>
                  <input type="text" name="price" value="{{ $items->iprice }}" hidden>
                  <p class="card-text">{{ $items->description }}</p>


                    <div class="card-body">
                        Quantity:<input class="form-control" type="text" name="quantity" >
                        @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>




                    <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="Add to Cart">
                    {{ csrf_field() }}
                    </div>
                    </form>
                </div>
              </div>
        </div>
    <br/>
    <div class="col-sm-4"></div>
    </div>

</div>
@endsection

@section('title')
  Cart
@endsection
