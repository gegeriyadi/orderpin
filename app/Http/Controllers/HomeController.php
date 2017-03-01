<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Order;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $orders = User::find($id)->orders;

        return view('home', ['orders' => $orders]);
    }
}
