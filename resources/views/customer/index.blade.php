@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @for($i=0;$i<$items->count();$i++)
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <div class="card-header">
                        {{ $items[$i]->iname }}
                      </div>
                  <h5 class="card-title">{{ $items[$i]->iprice }}</h5>
                  <p class="card-text">{{ $items[$i]->description }}</p>
                  <form method="POST" action="{{ route('favourite.store') }}">
                    <input type="text" name="iid" value="{{ $items[$i]->iid }}" hidden>
                  <input type="submit" class="btn btn-primary" value="Add to Fav">
                  {{ csrf_field() }}
                  </form>
                  <form method="POST" action="{{ route('cart.addcart',$items[$i]) }}">
                    <input type="text" name="iid" value="{{ $items[$i]->iid }}" hidden>
                    <input type="submit" class="btn btn-success" value="Add to Cart">
                    {{ csrf_field() }}
                    </form>
                </div>
              </div>
        </div>
    <br/>
        @endfor

</div>
@endsection

@section('title')
  Guest Home
@endsection
