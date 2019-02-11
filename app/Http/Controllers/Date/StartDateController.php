<?php

namespace App\Http\Controllers\Date;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StartDateController extends Controller
{
    public function index()
    {
        return view('calculate.date.start.index');
    }
}
