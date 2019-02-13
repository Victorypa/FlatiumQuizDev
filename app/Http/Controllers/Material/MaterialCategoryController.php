<?php

namespace App\Http\Controllers\Material;

use App\Models\Card\Card;
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
        Card::where('id', $request->card_id)->first()->material_categories()->create([
            'type' => $request->type
        ]);
    }
}
