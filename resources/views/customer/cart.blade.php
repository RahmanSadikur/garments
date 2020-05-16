@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-11"></div>
        <div class="col-sm-1">
            <form method="POST" action="{{ route('payment.store') }}">
                <input type="text" name="olid" value="$items[0]" hidden>
                <input type="submit" value="Make Payment" class="btn btn-info">

            {{ csrf_field() }}


            </form>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @for($i=0;$i<$items->count();$i++)
                <form method="POST" action="{{ route('cart.update',$items[$i]->otid) }}">
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $items[$i]->iname }}</td>
                <td><input class="form-control" type="text" name="quantity" value="{{ $items[$i]->quantity }}" }}>
                    <input class="form-control" type="text" name="iid" value="{{ $items[$i]->iid }}" hidden>
                </td>
                <td>{{ $items[$i]->price }}</td>
                <td><input type="submit" value="Update" class="btn btn-info"></td>
              </tr>
              {{ csrf_field() }}
              {{ method_field('put') }}
                </form>
              @endfor

            </tbody>
          </table>

        </div>
    <br/>


</div>
@endsection

@section('title')
  Guest Home
@endsection
