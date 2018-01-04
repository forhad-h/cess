@extends('layouts/index')
@section('add-user')
<form class="form-horizontal" action="" method="">
<div class="panel panel-primary">
<div class="panel-heading">
    <div class="col-md-9 heading_title">
        Add Information
     </div>
     <div class="col-md-3 text-right">
        <a href="{{url('user/all')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All user</a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="panel-body">
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Number</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Disabled</label>
    <div class="col-sm-8">
      <input type="text" value="Creative IT" class="form-control" placeholder="" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Select</label>
    <div class="col-sm-4">
      <select class="form-control select_cus">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Text Area</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Radio</label>
    <div class="col-sm-8">
      <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="" value="1">
            Male
          </label>
          <label>
            <input type="radio" name="optionsRadios" id="" value="2">
            Female
          </label>
        </div>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Checkbox</label>
    <div class="col-sm-8">
      <div class="checkbox-inline">
          <label>
            <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
          </label>
       </div>
       <div class="checkbox-inline">
          <label>
            <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
          </label>
       </div>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Upload</label>
    <div class="col-sm-8">
      <input type="file" name="">
    </div>
  </div>
</div>
<div class="panel-footer text-center">
<button class="btn btn-sm btn-primary">REGISTRATION</button>
</div>
</div>
</form>
@endsection