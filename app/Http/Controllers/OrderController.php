<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = Order::all();
        return view('order.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $order = new App\Order([
        //     'jenis_pin' => $request->jenis_pin,
        //     'size_pin' => $request->size_pin,
        //     'jumlah_pin' => $request->jumlah_pin,
        //     'file_desain' => $request->file('file_desain')->store('order'),
        // ]);
        $user = Auth::user()->id;
        // $user->orders()->save($order);
        Order::create([
            'jenis_pin' => $request->jenis_pin,
            'size_pin' => $request->size_pin,
            'jumlah_pin' => $request->jumlah_pin,
             'file_desain' => $request->file('file_desain')->store('order'),
             'user_id' => $user
            ]);

        // $order = $user->orders()->create([
        //     'jenis_pin' => $request->jenis_pin,
        //     'size_pin' => $request->size_pin,
        //     'jumlah_pin' => $request->jumlah_pin,
        //     'file_desain' => $request->file('file_desain')->store('order'),
        // ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
