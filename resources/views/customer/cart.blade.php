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
                <td><input type="submit" value="Update" class="btn btn-info">
              {{ csrf_field() }}
              {{ method_field('put') }}
            </form>
              <form method="POST" action="{{ route('cart.destroy',$items[$i]->otid) }}">
                {{ csrf_field() }}
                <input type="submit" value="Delete" class="btn btn-danger">

                {{ method_field('delete') }}
              </form>
            </td>
        </tr>

              @endfor

            </tbody>
          </table>

        </div>
    <br/>
    @if($amount)

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
            <form method="POST" action="{{ route('payment.store') }}">
               <p> Date: <input type="date" name="date" value="{{ date('Y-m-d') }}" class="form-control" readonly></p>
               <p>Order ID: <input type="text" name="olid" value="{{ $order->olid }}" class="form-control"id="olid" readonly></p>
                <p>Total amount :<input type="text" name="amount" value="{{$amount}}" class="form-control" readonly></p>

                <p>Total amount :<input type="text" name="card no:" value="" class="form-control"></p>
                <input type="submit" value="Make Payment" class="btn btn-info" id="paysub">

            {{ csrf_field() }}


            </form>
            <form method="POST" action="{{ route('order.update', $order->olid) }}">



                 <input type="submit" value="Confirm Order" class="btn btn-info" >

             {{ csrf_field() }}
             {{ method_field('put') }}


             </form>
                </div>
            </div>
        </div>
    </div>
@endif

</div>
@endsection

@section('title')
  Guest Home
@endsection

