<?php

namespace App\Http\Controllers\Price;

use App\Models\Price\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index()
    {
        return view('panel.prices.index', [
            'prices' => Price::get()
        ]);
    }

    public function store(Request $request)
    {

    }
}
