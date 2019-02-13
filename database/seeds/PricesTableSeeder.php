<?php

use App\Models\Price\Price;
use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    protected $mappings = [
        'LOFT' => [
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
            ]
        ],

        'SK' => [
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
            ]
        ]
    ];

    public function run()
    {
        foreach ($this->mappings as $style => $categories) {
            foreach ($categories as $category => $types) {
                foreach ($types as $type => $price) {
                    Price::create([
                        'style' => $style,
                        'category' => $category,
                        'type' => $type,
                        'price' => $price
                    ]);
                }
            }
        }
    }
}
