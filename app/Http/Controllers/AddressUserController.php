<?php

namespace App\Http\Controllers;

use App\Models\AddressUser;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.address');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
      try { 
        DB::beginTransaction();
        $AddressUser = new AddressUser();

        $AddressUser->name = $request->name;
        $AddressUser->address = $request->address;
        $AddressUser->address_addon = $request->address_addon;
        $AddressUser->district = $request->district;
        $AddressUser->province = $request->province;
        $AddressUser->phone = $request->phone;
        $AddressUser->province_code = $request->province_code;
        $AddressUser->address_type = $request->address_type;

        $AddressUser->save();
        DB::commit();

        return redirect()->route('showAddress');
   } catch (\Throwable $th) {
    DB::rollback();
    return response()->json([
        'successful' => False,
        'msg' => $th->getMessage()
    ]);
    return redirect()->back()->with('error', 'ไม่สำเร็จ');
}
}


    public function show()
    { {
            $showAddress = AddressUser::all();

            return view('user.address', compact('showAddress'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddressUser  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressUSer $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddressUser  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddressUSer $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddressUSer  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}