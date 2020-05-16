@extends('layout.customer_layout')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="POST" action="{{ route('user.update',$user) }}">
            <div class="card">

                <div class="card-body">
                   <div >
                       User Name:
                       <input type="text" class="form-control" name="uname" value="{{ $user->uname }}">
                   </div>
                   <div >
                    Email:
                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <div >
                    User Name:
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                </div>
                <div >
                    User Name:
                    <input type="text" class="form-control" name="gender" value="{{ $user->gender }}">
                </div>
                <div >
                    User Name:
                    <input type="submit" class="btn btn-info" >
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                </div>
                </div>
              </div>
            </form>
        </div>
        <div class="col-sm-3"></div>


</div>
</div>
@endsection

@section('title')
  Guest Home
@endsection
