@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @for($i=0;$i<$subcategory->count();$i++)
        <div class="col-sm-4">
            <a href="{{ route('item.showallc',$subcategory[$i]->scid) }}">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="">
                <div class="card-body">
                    <div class="card-header">
                        {{ $subcategory[$i]->scname }}
                      </div>

                  Buy here
                </div>
              </div>
            </a>

        </div>
    <br/>
        @endfor

</div>
@endsection

@section('title')
  Guest Home
@endsection
