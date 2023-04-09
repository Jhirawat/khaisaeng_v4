<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Session;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


    public function generateOrderNumber()
    {
        $today = Carbon::now();
        $order_number = $today->format('ymd') . sprintf("%06d", 1);

        // check if the last order number was generated today, if yes, increase the counter
        if (Session::has('last_order_number_date') && Session::get('last_order_number_date') == $today->format('Ymd')) {
            $latest_counter = intval(Session::get('last_order_number_counter'));
            $order_number = $today->format('ymd') . sprintf("%06d", $latest_counter + 1);
        }

        Session::put('last_order_number_date', $today->format('Ymd'));
        Session::put('last_order_number_counter', substr($order_number, 6));

        $data = ['order_number' => $order_number];
        return view('order_number', $data);
    }
}
