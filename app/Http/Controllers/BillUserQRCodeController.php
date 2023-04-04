<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillUserQRCodeController extends Controller
{
    public function index()
    {
        return view('user.billqrcode');
    }

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('user.billqrcode', compact('cartItems'));
    }
}
