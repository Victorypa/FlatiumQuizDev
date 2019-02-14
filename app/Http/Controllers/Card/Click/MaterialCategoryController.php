<?php

namespace App\Http\Controllers\Card\Click;

use Illuminate\Http\Request;
use App\Models\Card\Click\Click;
use App\Http\Controllers\Controller;

class MaterialCategoryController extends Controller
{
    public function index()
    {
        return view('panel.clicks.material_categories.index', [
            'standard' => Click::where('name', 'standard')->get()->count(),
            'comfort' => Click::where('name', 'comfort')->get()->count(),
            'premium' => Click::where('name', 'premium')->get()->count()
        ]);
    }
}
