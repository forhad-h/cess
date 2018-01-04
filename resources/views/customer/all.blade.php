@extends('layouts.index')
@section('all-customers')
<div class="panel panel-primary">
<div class="panel-heading">
    <div class="col-md-9 heading_title">
        All customer &nbsp;&nbsp;&nbsp; <a href="{{url('customer/all-trash')}}" class="trash">trash ({{session('trashed_num')}})</a>
    </div>
    <div class="col-md-3 text-right">
        <a href="{{url('customer/add')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add customer</a>
    </div>
    <div class="clearfix"></div>
</div>
@if(session()->has('success'))
    <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        One customer deleted. You can restore this customer in <a href="{{url('customer/all-trash')}}"  class="trash" style="color: inherit;text-decoration: underline;">trash</a>.
    </div>
@endif
<div class="panel-body">
  <table class="table table-responsive table-striped table-hover table_cus">
                <thead class="table_head">
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allcustomer as $data)
                <tr>
                    <td>{{$data->customer_name}}</td>
                    <td>{{$data->customer_email}}</td>
                    <td>{{$data->customer_phone}}</td>
                    <td>{{$data->customer_address}}</td>
                    <td>
                        <a href="{{url('customer/view/'.$data->customer_id)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                        <a href="{{route('edit customer', ['id' => $data->customer_id])}}"><i class="fa fa-pencil-square fa-lg"></i></a>
                        <a href="{{route('trash customer', ['id' => $data->customer_id])}}" onclick="event.preventDefault();confirmBox(this);"><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
  </table>
</div>
<div class="panel-footer">
<div class="col-md-4">
    <a href="#" class="btn btn-sm btn-warning">EXCEL</a>
    <a href="#" class="btn btn-sm btn-primary">PDF</a>
    <a href="#" class="btn btn-sm btn-danger">SVG</a>
    <a href="#" class="btn btn-sm btn-success">PRINT</a>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 text-right">
        <nav aria-label="Page navigation">
      <ul class="pagination pagina_cus">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
</div>
<div class="clearfix"></div>
</div>
</div>
@endsection