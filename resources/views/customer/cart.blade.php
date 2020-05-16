@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">

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

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
            <form method="POST" action="{{ route('payment.store') }}">
               <p> Date: <input type="date" name="date" value="{{ date('Y-m-d') }}" class="form-control" readonly></p>
               <p>Order ID: <input type="text" name="olid" value="{{ $items[0]->olid }}" class="form-control"id="olid" readonly></p>
                <p>Total amount :<input type="text" name="amount" value="{{$amount}}" class="form-control" readonly></p>

                <p>Total amount :<input type="text" name="card no:" value="" class="form-control"></p>
                <input type="submit" value="Make Payment" class="btn btn-info" id="paysub">

            {{ csrf_field() }}


            </form>
            <form method="POST" action="{{ route('order.update', $items[0]->olid) }}">



                 <input type="submit" value="Confirm Order" class="btn btn-info" id="update">

             {{ csrf_field() }}
             {{ method_field('put') }}


             </form>
                </div>
            </div>
        </div>



</div>
@endsection

@section('title')
  Guest Home
@endsection

