<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\discount;
use Illuminate\Support\Str;

class discountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discounts = [10 , 33.3 , 50 , 20 , 30 ];

        foreach ($discounts as $key => $item) {
            discount::create([
                'id' => $key + 1,
                'd_number' => $item,
            ]);
        }
    }
}
