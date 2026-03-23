<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // You can pass products data here if needed
        return view('products.index');
    }
}
