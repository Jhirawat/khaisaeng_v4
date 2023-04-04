<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProduct;
use Illuminate\Support\Facades\DB;

class TypeProductController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TypeProduct::all();
        // dd( $data['dpid1']);
        return view('setting.type_product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $data = new TypeProduct();
        // $data->dpid = IdGenerator::generate(['table' => 'department', 'field' => 'dpid', 'length' => 6, 'prefix' => "DP"]);
        $data->type_name  = $request->type_name;
        $data->type_status  = 1;
        // add other fields
        $data->save();
        DB::commit();
        return redirect()->back()->with('status', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = TypeProduct::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TypeProduct::find($id);
        return view('setting.type_product', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProduct $typeProduct)
    {
        $student = TypeProduct::find($request->input('id'));
        $student->type_name = $request->input('type_name');
        $student->update();
        return redirect()->back()->with('status', 'Student Updated Successfully');
    }

    public function updatestatus(Request $request)
    {
        // dd($request->id);
        try {
            $student = TypeProduct::find($request->id);
            $student->type_status = $request->input('type_status');
            // dd($request->all());
            $student->update();
            return response()->json([
                'successful' => TRUE,
                'msg' => 'Student Updated Successfully'
            ]);
            // return redirect()->back()->with('status', 'Student Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollback();
            // dd($th->getMessage());
            return response()->json([
                'successful' => False,
                'msg' => $th->getMessage()
            ]);
            // return redirect()->back()->with('error', 'ไม่สำเร็จ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProduct $typeProduct)
    {
        //
    }
}
