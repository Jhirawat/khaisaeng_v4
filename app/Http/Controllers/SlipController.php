<?php

namespace App\Http\Controllers;

use App\Models\slip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Intervention\Image\ImageManagerStatic as Image;
class SlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.slip');
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
        try {

            DB::beginTransaction();
            $table = new slip();
            // $table->slip_name=  $request->slip_name;
            $table->slip_date=  $request->slip_date;
            if ($request->hasFile('slip_image')) {
                $image = $request->file('slip_image');
                $extention = $image->getClientOriginalExtension();
                $fileName  = time() . '.' . $extention;

                $location = 'images/' . $fileName;

                $img = Image::make($image);
                $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->save($location);

                $table->slip_image =  $fileName;
            }
            // dd($request->all());
            $table->save();

            DB::commit();
            // Alert::success('บันทึกสำเร็จ');
            return redirect()->route('upload-slip')->with('success', 'เพิ่มสำเสร็จ');
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
}
