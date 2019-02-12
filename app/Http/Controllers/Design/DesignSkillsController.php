<?php

namespace App\Http\Controllers\Design;

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

    }
}
