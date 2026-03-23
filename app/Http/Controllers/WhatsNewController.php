<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsNewController extends Controller
{
    public function index()
    {
        // You can pass news or updates data here if needed
        return view('whats-new.index');
    }
}
