<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	$orders = Order::all();
    	return view('admin.index', ['orders' => $orders]);
    }
}
