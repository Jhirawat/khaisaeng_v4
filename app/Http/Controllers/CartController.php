<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressUser;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cart');
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
    public function show()
    { {
            $showAddress = AddressUser::all();

            return view('user.cart', compact('showAddress'));
        }
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

    // public function cartList()
    // {
    //     $cartItems = \Cart::getContent();
    //     // dd($cartItems);
    //     return view('user.cart', compact('cartItems'));
    // }


    // public function cartList()
    // {
    //     $cartItems = \Cart::getContent();
    //     // dd($cartItems);
    //     return view('user.cart', ['cartItems' => $cartItems]);
    // }

    // public function cartList()
    // {
    //     $cartItems = \Cart::getContent();
    //     // dd($cartItems);
    //     view()->share('cartItems', $cartItems);
    //     return view('user.cart');
    // }

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('user.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add(
            [
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,
                ),
            ]
        );
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('products');
    }

    // public function updateCart(Request $request)
    // {
    //     \Cart::update(
    //         $request->id,
    //         [
    //             'quantity' => [
    //                 'relative' => false,
    //                 'value' => $request->quantity
    //             ],
    //         ]
    //     );


    //     session()->flash('success', 'Item Cart is Updated Successfully !');

    //     return redirect()->route('cartList.user');
    // }



    public function updateCart(Request $request)
    {
        $cartItem = \Cart::get($request->id);

        if ($cartItem) {
            // อัพเดตจำนวนสินค้า
            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );

            // สลับตำแหน่งของสินค้าใหม่กับสินค้าที่อยู่ข้างล่างสุด
            $cartItems = \Cart::getContent();
            $cartItems = $cartItems->sortBy(function ($item, $key) use ($request, $cartItem) {
                if ($item->id == $request->id) {
                    return 0;
                } else if ($item->id == $cartItem->id) {
                    return 1;
                } else {
                    return 2;
                }
            });

            // บันทึกข้อมูลสินค้าใหม่ที่อัพเดตแล้วกลับเข้าสู่ตะกร้า
            \Cart::clear();
            foreach ($cartItems as $item) {
                \Cart::add(
                    [
                        'id' => $item->id,
                        'name' => $item->name,
                        'price' => $item->price,
                        'quantity' => $item->quantity,
                        'attributes' => [
                            'image' => $item->attributes['image'],
                        ],
                    ]
                );
            }

            session()->flash('success', 'Item Cart is Updated Successfully !');
        } else {
            session()->flash('error', 'Item Cart not found !');
        }

        return redirect()->route('cartList.user');
    }



    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cartList.user');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cartList.user');
    }
}
