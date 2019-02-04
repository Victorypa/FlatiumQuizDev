<?php

namespace App\Models\Calculator;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    protected $guarded = [];

    protected $mappings = [
        'LOFT' => [
            [
                'standard' => [
                    'new' => 6800,
                    'total_new' => 9500,
                    'old' => 11300
                ],
                'comfort' => [
                    'new' => 7100,
                    'total_new' => 9800,
                    'old' => 11800
                ],
                'premium' => [
                    'new' => 7500,
                    'total_new' => 10200,
                    'old' => 12200
                ],
            ]
        ],

        'SK' => [
            [
                'standard' => [
                    'new' => 6510,
                    'total_new' => 9030,
                    'old' => 10800
                ],
                'comfort' => [
                    'new' => 6720,
                    'total_new' => 9240,
                    'old' => 11000
                ],
                'premium' => [
                    'new' => 7140,
                    'total_new' => 9660,
                    'old' => 11500
                ],
            ]
        ],

        'K' => [
            'standard' => [
                'new' => 6700,
                'total_new' => 9300,
                'old' => 11200
            ],
            'comfort' => [
                'new' => 6900,
                'total_new' => 9500,
                'old' => 11400
            ],
            'premium' => [
                'new' => 7300,
                'total_new' => 10000,
                'old' => 11900
            ],
        ]
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($calculator) {

        });
    }
}
