<?php

namespace App\Http\Controllers\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Calculator\Calculator;

class CalculatorController extends Controller
{
    public function store(Request $request)
    {
        Calculator::create($request->all());
    }
}
