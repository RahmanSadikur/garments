@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @for($i=0;$i<$payment->count();$i++)
              <tr>
                <th scope="row">1</th>
                <td>{{ $payment[$i]->date }}</td>
                <td>{{ $payment[$i]->amount }}</td>
                <td>{{ $payment[$i]->status }}</td>
              </tr>
              @endfor

            </tbody>
          </table>


    </div>


</div>
@endsection

@section('title')
  Payment History
@endsection
