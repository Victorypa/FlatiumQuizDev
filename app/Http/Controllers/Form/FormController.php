<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
}
