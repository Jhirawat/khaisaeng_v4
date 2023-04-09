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
        // DB::beginTransaction();
        // $data = new TypeProduct();
        // // $data->dpid = IdGenerator::generate(['table' => 'department', 'field' => 'dpid', 'length' => 6, 'prefix' => "DP"]);
        // $data->type_name  = $request->type_name;
        // $data->type_status  = 1;
        // // add other fields
        // $data->save();
        // DB::commit();
        // return redirect()->back()->with('status', 'Student Added Successfully');


        //แก้ไขเป็น V.2
        // DB::beginTransaction();
        // $data = new TypeProduct();
        // // get the last id from the table
        // $lastId = TypeProduct::select('id')->orderBy('id', 'DESC')->first();
        // // if there is no existing record, set the id to 1
        // if (!$lastId) {
        //     $data->id = 1;
        // } else {
        //     // set the id to the next number after the last id
        //     $data->id = $lastId->id + 1;
        // }
        // // set the type_status based on the id
        // if ($data->id == 1) {
        //     $data->type_status = 1;
        // } else if ($data->id == 2) {
        //     $data->type_status = 2;
        // } else if ($data->id == 3) {
        //     $data->type_status = 3;
        // }
        // // set other fields
        // $data->type_name = $request->type_name;
        // $data->save();
        // DB::commit();
        // return redirect()->back()->with('status', 'Data Added Successfully');


        //แก้ไขเป็น V.3
        DB::beginTransaction();
        $data = new TypeProduct();
        // get the last id from the table
        $lastId = TypeProduct::select('id')->orderBy('id', 'DESC')->first();
        // if there is no existing record, set the id to 1
        if (!$lastId) {
            $data->id = 1;
        } else {
            // set the id to the next number after the last id
            $data->id = $lastId->id + 1;
        }
        // set the type_status based on the id
        switch ($data->id) {
            case 1:
                $data->type_status = 1;
                break;
            case 2:
                $data->type_status = 2;
                break;
            case 3:
                $data->type_status = 3;
                break;
            case 4:
                $data->type_status = 4;
                break;
                // add more cases as needed
            default:
                // set the type_status to the id number if it is greater than 10
                $data->type_status = $data->id;
                break;
        }
        // set other fields
        $data->type_name = $request->type_name;
        $data->save();
        DB::commit();
        return redirect()->back()->with('status', 'Data Added Successfully');
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
