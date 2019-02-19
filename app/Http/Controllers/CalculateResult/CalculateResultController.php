<?php

namespace App\Http\Controllers\CalculateResult;

use App\Models\Card\Card;
use App\Models\Price\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Amo\Contact\ContactCreate;
use App\Services\Amo\Leads\LeadCreate;

class CalculateResultController extends Controller
{
    protected $mappings = [
        'LOFT' => 'LOFT',
        'SK' => 'K',
        'CON' => 'SK',
        'ECO' => 'LOFT',
        'SKAN' => 'SK',
        'K' => 'K'
    ];

    public function index(Request $request)
    {
        return view('calculate.result.index');
    }

    public function getResult(Card $card)
    {
        $square = $card->squares()->first()->area;

        $style = $this->mappings[strtoupper($card->result)];

        $category = $card->material_categories()->first()->type;
        $type = $card->decorations()->first()->type;

        return Price::where([
            ['style', $style],
            ['category', $category],
            ['type', $type]
        ])->first();

        return response([
            $price
        ]);
    //     return response([
    //         $style,
    // $category,
    // $type
    //     ]);
    }
}
