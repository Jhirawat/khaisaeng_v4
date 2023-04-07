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


    public function  imageauto()
{
    // สร้างภาพแบบ auto-generated
    $image = imagecreatetruecolor(400, 400);
    $bg_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 0, 0);
    imagefill($image, 0, 0, $bg_color);
    imagestring($image, 5, 150, 180, 'Auto-generated image', $text_color);

    // บันทึกภาพลงในฐานข้อมูล
    $data = base64_encode(imagepng($image));
    // อัพเดทข้อมูลลงในฐานข้อมูล
    $query = "UPDATE orderlist SET image_data='$data' WHERE id=1";
    // ดำเนินการอัพเดทฐานข้อมูล
    // ...

    // ส่งภาพแบบ auto-generated ไปยังหน้า HTML
    return view('user.billdestination')->with('data', $data);
}

}
