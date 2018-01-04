<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="{{asset('content')}}/css/font-awesome.min.css"/>
    <link type="text/css" href="{{asset('content')}}/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('content')}}/css/style.css"/>
  </head>
  <body>
  	<div class="container-fluid header_full">
    	<div class="container header">
        	<div class="row">
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	<img class="img-responsive" src="{{asset('content')}}/images/avatar.png"/>
                    <h4>{{ Auth::user()->name}}</h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                    <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    @if(Auth::user()->role_id == 1)
                    <li><a href="{{url('user/all')}}"><i class="fa fa-user-circle"></i> User</a></li>
                    @endif
                    <li><a href="{{url('customer/all')}}"><i class="fa fa-gamepad"></i> Customers</a></li>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Banner</a></li>
                    <li><a href="#"><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                         <i class="fa fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                         </form>
                    </li>
                </ul>
            </div><!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>
                <div class="col-md-12">
                    @yield('index')
                    @yield('all-users')
                    @yield('add-user')
                    @yield('view-user')
                    @yield('all-customers')
                    @yield('add-customer')
                    @yield('edit-customer')
                    @yield('all-trash')
                    @yield('view-customer')
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <div class="container-fluid footer_full">
    	<div class="container footer">
        	<div class="row">
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <script type="text/javascript" src="{{asset('content')}}/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('content')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('content')}}/js/custom.js"></script>
  </body>
</html>