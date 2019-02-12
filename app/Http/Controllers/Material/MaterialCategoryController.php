<?php

namespace App\Http\Controllers\Material;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialCategoryController extends Controller
{
    public function index()
    {
        return view('calculate.material.category.index');
    }

    public function store(Request $request)
    {

    }
}
