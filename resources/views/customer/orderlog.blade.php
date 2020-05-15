@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Order Id</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @for($i=0;$i<$order->count();$i++)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $order[$i]->olid }}</td>
                <td>{{ $order[$i]->date }}</td>
                <td>{{ $order[$i]->status }}</td>
              </tr>
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
