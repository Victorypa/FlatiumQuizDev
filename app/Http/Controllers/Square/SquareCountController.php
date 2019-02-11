<?php

namespace App\Http\Controllers\Square;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SquareCountController extends Controller
{
    public function index()
    {
        return view('calculate.square.count.index');
    }
}
