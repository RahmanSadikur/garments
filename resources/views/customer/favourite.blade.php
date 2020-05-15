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
                  <form method="POST" action="{{ route('favourite.destroy',$items[$i]->fid) }}">

                  <input type="submit" class="btn btn-primary" value="Remove">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  </form>

                </div>
              </div>
        </div>
    <br/>
        @endfor

</div>

</div>
@endsection

@section('title')
  Guest Home
@endsection
