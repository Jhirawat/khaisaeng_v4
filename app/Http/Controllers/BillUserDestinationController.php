<?php

namespace App\Http\Controllers;

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
        return view('user.billdestination', compact('cartItems'));
    }
}
