<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('superadmin');
    }
    public function all() {
        $alluser = User::where('status', 1)->get();
        return view('admin.user.all', compact('alluser'));
    }
    public function add() {
        return view('admin.user.add');
    }
    public function view_u() {
        return view('admin.user.view');
    }
}
