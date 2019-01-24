<?php

namespace App\Http\Controllers\Person;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        return Person::create($request->all());
    }
}
