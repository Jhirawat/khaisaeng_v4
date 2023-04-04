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

    public function Number()
    {
        $orderNumber = session('order_number', 1);
        // สร้างเลขออเดอร์ใหม่โดยเพิ่มค่าจากเลขออเดอร์เดิม 1
        $newOrderNumber = str_pad((int)$orderNumber + 1, 6, "0", STR_PAD_LEFT);
        // บันทึกค่าเลขออเดอร์ใหม่ลง session
        session(['order_number' => $newOrderNumber]);
        return view('user.billdestination', ['orderNumber' => $newOrderNumber]);
    }


}
