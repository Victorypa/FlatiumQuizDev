<?php

namespace App\Http\Controllers\Panel\Result;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public function index()
    {
        return view('panel.results.index', [
            
        ]);
    }
}
