<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YearlyController extends Controller
{
    public function index()
    {
        return view('admin.sales.yearly');
    }
}
