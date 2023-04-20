<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin');
    }

    public function productList()
    { {
            $productss = Product::all();

            return view('admin.product', compact('productss'));
        }
    }


    public function type()
    {
        $type = TypeProduct::all();


        return view('admin.product',compact('type'));
    }



    // public function show($id)
    // {
    //     //
    //     $data = Product::find($id);
    //     return response()->json($data);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request)
    // {
    //     $id = $request->id;

    //     $product = Product::find($id);
    //     //dd($product);

    //     if ($request->name) {
    //         $product->name = $request->name;
    //     }

    //     if ($request->image) {
    //         $image = $request->file('image');

    //         $extention = $image->getClientOriginalExtension();

    //         $fileName  = time() . '.' . $extention;

    //         $location = 'images/' . $fileName;

    //         $img = image::make($image);

    //         $img->resize(500, 500, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });

    //         $img->save($location);

    //         $product->image =  $fileName;
    //     }

    //     if ($request->price) {
    //         $product->price = $request->price;
    //     }

    //     if ($request->description) {
    //         $product->description = $request->description;
    //     }

    //     $product->update();

    //     // return redirect()->route('admin')->with('success', 'บันทึกสำเสร็จ');
    //     return redirect()->route('adminhome');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $product = Product::find($id);
    //     $product->delete();
    // }

    // public function search($name)
    // {
    //     $products = Product::where([
    //         ['name', 'like', '%' . $name . '%']
    //     ])->get();

    //     return $products;
    // }
    public function update(Request $request)
    {
        $id = $request->id;

        $products = Product::find($id);
        //dd($product);

        if ($request->product_name) {
            $products->product_name = $request->product_name;
        }

        if ($request->product_image) {
            $product_image = $request->file('image');

            $extention = $product_image->getClientOriginalExtension();

            $fileName  = time() . '.' . $extention;

            $location = 'images/' . $fileName;

            $img = Image::make($product_image);

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($location);

            $products->product_image =  $fileName;
        }

        if ($request->price) {
            $products->product_price = $request->product_price;
        }

        if ($request->description) {
            $products->description = $request->description;
        }

        $products->update();

        // return redirect()->route('admin')->with('success', 'บันทึกสำเสร็จ');
        return redirect()->route('admin.product');
    }
}
