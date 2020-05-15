@extends('layout.guest_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @for($i=0;$i<$category->count();$i++)
        <div class="col-sm-4">
            <a href="{{ route('subcategory.showall',$category[$i]->cid) }}" >
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="">
                <div class="card-body">
                    <div class="card-header">
                        {{ $category[$i]->cname }}
                      </div>


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
