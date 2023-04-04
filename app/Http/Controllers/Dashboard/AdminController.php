<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
}
