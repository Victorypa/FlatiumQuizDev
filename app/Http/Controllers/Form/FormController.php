<?php

namespace App\Http\Controllers\Form;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index(Card $card)
    {
        return view('forms.index');
    }
}
