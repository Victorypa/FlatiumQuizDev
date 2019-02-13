<?php

namespace App\Http\Controllers\Price;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index()
    {
        return view('panel.prices.index');
    }

    public function store(Request $request)
    {

    }
}
