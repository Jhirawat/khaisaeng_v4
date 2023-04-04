<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillUserController extends Controller
{
    public function index()
    {
        return view('user.billuser');
    }
}
