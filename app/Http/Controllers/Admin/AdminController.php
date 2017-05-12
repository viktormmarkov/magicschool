<?php

namespace App\Http\Controllers\Admin;

use DB;
use View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminController extends Controller
{	


    public function __construct(){
    	$this->middleware('admin');
    }

    public function index(){
    	return view('admin/app');
    }
}
