<?php

namespace App\Http\Controllers\Decoration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DecorationController extends Controller
{
    public function index()
    {
        return view('calculate.decoration.index');
    }
}
