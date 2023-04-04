<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('admin.bill');
    }

    // public function showOrderNumberForm()
    // {
    //     $orderNumber = 1; // เริ่มต้นที่เลขออเดอร์แรกคือ 1

    //     // ค้นหาเลขออเดอร์ล่าสุด
    //     $lastOrder = Order::latest('id')->first();

    //     if ($lastOrder) {
    //         $orderNumber = intval($lastOrder->order_number) + 1;
    //     }

    //     // สร้างเลขออเดอร์ใหม่
    //     $orderCode = str_pad($orderNumber, 6, '0', STR_PAD_LEFT);

    //     // ส่งตัวแปร $orderCode ไปยัง view
    //     return view('order-number-form', compact('orderCode'));
    // }

    public function random()
    {
        $randomNumber = Str::random(6);
    }
}
