<?php

namespace App\Http\Controllers\Card\Click;

use Illuminate\Http\Request;
use App\Models\Card\Click\Click;
use App\Http\Controllers\Controller;

class DesignSkillController extends Controller
{
    public function index()
    {
        return view('panel.clicks.design_skills.index', [
            'junior' => Click::where('name', 'junior')->get()->count(),
            'middle' => Click::where('name', 'middle')->get()->count(),
            'senior' => Click::where('name', 'senior')->get()->count()
        ]);
    }
}
