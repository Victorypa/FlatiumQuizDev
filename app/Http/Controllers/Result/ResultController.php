<?php

namespace App\Http\Controllers\Result;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public function index()
    {
      return view('result.index');
    }
}
