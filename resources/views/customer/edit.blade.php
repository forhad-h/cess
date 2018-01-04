@extends('layouts.index')
@section('edit-customer')
<form enctype="multipart/form-data" class="form-horizontal" class="form-horizontal" action="{{route('update customer', ['id' => $customer->customer_id])}}" method="post">
    {{csrf_field()}}


<div class="panel panel-primary">
<div class="panel-heading">
    <div class="col-md-9 heading_title">
        Edit customer
     </div>
     <div class="col-md-3 text-right">
        <a href="{{url('customer/all')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All customer</a>
    </div>
    <div class="clearfix"></div>
</div>

         @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Customer has been updated {{session('success')}}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Nothing to update
        </div>
        @endif
    
<div class="panel-body">
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="name" value="{{$customer->customer_name}}">
        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
       @endif
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" name="email" value="{{$customer->customer_email}}">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="phone" value="{{$customer->customer_phone}}">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="address" value="{{$customer->customer_address}}">
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Upload</label>
    <div class="col-sm-8">
      <input type="file" name="image">
    </div>
  </div>
</div>
    
<div class="panel-footer text-center">
<button class="btn btn-sm btn-primary">UPDATE</button>
</div>
</div>
</form>
@endsection