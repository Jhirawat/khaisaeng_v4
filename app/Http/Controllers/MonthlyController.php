<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyController extends Controller
{
    public function index()
    {
        return view('admin.sales.monthly');
    }
}
