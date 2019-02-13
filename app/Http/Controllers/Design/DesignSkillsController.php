<?php

namespace App\Http\Controllers\Design;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignSkillsController extends Controller
{
    public function index()
    {
        return view('calculate.design.skills.index');
    }

    public function store(Request $request)
    {
        Card::where('id', $request->card_id)->first()->design_skills()->create([
            'type' => $request->type
        ]);
    }
}
