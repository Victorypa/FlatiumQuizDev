<?php

namespace App\Http\Controllers\Card\Click;

use Illuminate\Http\Request;
use App\Models\Card\Click\Click;
use App\Http\Controllers\Controller;

class ClickController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
