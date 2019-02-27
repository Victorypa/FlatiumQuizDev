<?php

namespace App\Http\Controllers\Calculator;

use Illuminate\Http\Request;
use App\Models\Price\Price;
use App\Http\Controllers\Controller;
use App\Models\Calculator\Calculator;
use App\Services\Amo\Leads\LeadCreate;
use App\Services\Amo\Contact\ContactCreate;


class CalculatorController extends Controller
{
    public function index()
    {
        return view('panel.calculator.index', [
            'calculators' => Calculator::get()
        ]);
    }

    public function store(Request $request)
    {
        $pipelineId = 1028320;

        $price = Price::where([
            ['style', $request->get('style')],
            ['category', $request->get('category')],
            ['type', $request->get('type')]
        ])->first()->price;

        $calculator = Calculator::create([
            'square' => $request->get('square'),
            'type' => $request->get('type'),
            'style' => $request->get('style'),
            'category' => $request->get('category'),
            'phone' => $request->get('phone'),
            'name' => $request->get('name'),
            'price' => $price * $request->get('square')
        ]);

        $contact = (new ContactCreate($this->client))->create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone')
        ]);

        if (!empty($contact)) {
            (new LeadCreate($this->client))->create([
                'name' => $request->get('name'),
                'sale' => $price * $request->get('square'),
                'tags' => array($request->get('type'), $request->get('style'), $request->get('category')),
                'pipeline_id' => $pipelineId,
                'contacts_id' => $contact->id,
                'responsible_user_id' => 2211916,
                'custom_fields' => array(
                    'square' => $request->get('square'),
                    'roistat_cookie' => $request->get('roistat_cookie')
                )
            ]);
        }
    }
}
