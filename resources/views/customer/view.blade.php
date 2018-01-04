@extends('layouts.index')
@section('view-customer')
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="col-md-9 heading_title">
			Customer Information
		 </div>
		 <div class="col-md-3 text-right">
			<a href="{{url('customer/all')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All customer</a>
		</div>
		<div class="clearfix"></div>
	</div>
  <div class="panel-body">
	  <div class="col-md-1">
	  </div>
	  <div class="col-md-9">
		<table class="table table-hover table-striped table-responsive view_table_cus">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td>{{$customer->customer_name}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>{{$customer->customer_email}}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td>{{$customer->customer_phone}}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>{{$customer->customer_address}}</td>
			</tr>
			<tr>
				<td>Registration Time</td>
				<td>:</td>
				<td>{{$customer->created_at}}</td>
			</tr>
                        <tr>
				<td>Update Time</td>
				<td>:</td>
				<td>{{$customer->updated_at}}</td>
			</tr>
		</table>
	  </div>
	  <div class="col-md-2">
	  </div>
  </div>
  <div class="panel-footer">
	<div class="col-md-4">
		<a href="#" class="btn btn-sm btn-primary">PDF</a>
		<a href="#" class="btn btn-sm btn-success">PRINT</a>
	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-4 text-right">
		
	</div>
	<div class="clearfix"></div>
  </div>
</div>
@endsection