<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


use Intervention\Image\ImageManagerStatic as Image;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin');
    }

    public function product()
    { {
            $products = Product::all();

            return view('user.product', compact('products'));
        }
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
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'image' => 'required',
        // ]);

        // $product = Product::create($request->all());

        // return $product;

        try {

            DB::beginTransaction();
            $table = new Product();
            $table->product_name=  $request->product_name;
            // $table->image =  $request->image;
            $table->product_price =  $request->product_price;
            $table->product_description =  $request->product_description;
            $table->product_category =  $request->product_category;

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                $extention = $image->getClientOriginalExtension();
                $fileName  = time() . '.' . $extention;

                $location = 'images/' . $fileName;

                $img = Image::make($image);
                $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->save($location);

                $table->product_image =  $fileName;
            }
            // dd($request->all());
            $table->save();

            DB::commit();
            // Alert::success('บันทึกสำเร็จ');
            return redirect()->route('create')->with('success', 'เพิ่มสำเสร็จ');
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'successful' => False,
                'msg' => $th->getMessage()
            ]);
            return redirect()->back()->with('error', 'ไม่สำเร็จ');
        }
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
        $data = Product::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $product = Product::find($id);
        //dd($product);

        if ($request->name) {
            $product->name = $request->name;
        }

        if ($request->image) {
            $image = $request->file('image');

            $extention = $image->getClientOriginalExtension();

            $fileName  = time() . '.' . $extention;

            $location = 'images/' . $fileName;

            $img = Image::make($image);

            $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($location);

            $product->image =  $fileName;
        }

        if ($request->price) {
            $product->price = $request->price;
        }

        if ($request->description) {
            $product->description = $request->description;
        }

        $product->update();

        // return redirect()->route('admin')->with('success', 'บันทึกสำเสร็จ');
        return redirect()->route('adminhome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }

    public function search($name)
    {
        $products = Product::where([
            ['name', 'like', '%' . $name . '%']
        ])->get();

        return $products;
    }


    // public function select()
    // {
    //     $type = DB::table('type_product')->select('id', 'type_name')->get();
    //     return view('admin.create', ['data' => $type]);
    // }


    // public function select()
    // {
    //     $type =DB::table('type_product')->select('id','type_name')->get();
    //     return view('admin.create',compact('type'));
    // }








    // public function productList()
    // { {
    //         $productss = Product::all();

    //         return view('product', compact('productss'));
    //     }
    // }


    //    public function type($type)
    //    {
    //     $type = DB::table('type_products')->get();
    //    }


    public function type()
    {
        $type = TypeProduct::all();


        return view('user.product',compact('type'));
    }
}
