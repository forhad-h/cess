@extends('layouts/index')
@section('all-users')
<div class="panel panel-primary">
<div class="panel-heading">
    <div class="col-md-9 heading_title">
        All Information View
     </div>
     <div class="col-md-3 text-right">
        <a href="{{url('user/add')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add user</a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="panel-body">
  <table class="table table-responsive table-striped table-hover table_cus">
                <thead class="table_head">
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role ID</th>
                <th>Role Name</th>
                <th>Created Time</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alluser as $data)
                <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role_id}}</td>
                <td>{{$data->roleName->role_name}}</td>
                <td>{{$data->created_at}}</td>
                <td>
                        <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                        <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                        <a href="#"><i class="fa fa-trash fa-lg"></i></a>
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