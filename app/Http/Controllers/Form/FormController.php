<?php

namespace App\Http\Controllers\Form;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Amo\Crud;

class FormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }

    public function store(Request $request)
    {
        $person = Card::where('id', $request->card_id)->first()->people()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        $pipelineId = 1572109;

        

        (new Crud($this->client, $person, $pipelineId))->create();
    }
}
