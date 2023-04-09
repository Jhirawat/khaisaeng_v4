<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Session;

use Illuminate\Http\Request;


class BillUserDestinationController extends Controller
{
    public function index()
    {
        return view('user.billdestination');
    }

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        // return view('user.billdestination', compact('cartItems'));

        return view('billdestination', ['cartItems' => $cartItems]);
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
        return view('user.billdestination', $data);
    }
}
