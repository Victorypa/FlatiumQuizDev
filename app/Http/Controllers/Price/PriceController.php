<?php

namespace App\Http\Controllers\Price;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    public function index()
    {
        dd('price index');
        return view();
    }

    public function store(Request $request)
    {

    }
}
