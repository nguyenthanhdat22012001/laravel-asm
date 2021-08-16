<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;
use Illuminate\Support\Str;

class productSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arr_product = array(
            // [
            //     'name' => 'Đầm body cá tình với nhiều màu sắc hiện đại',
            //     'price' => 1200000,
            //     'img' => "p35_large.jpg",
            // ],
            // [
            //     'name' => 'Đầm maxi dự tiệc hoa hồng - NH028',
            //     'price' => 1500000,
            //     'img' => 'p35_large.jpg',
            // ],
            // [
            //     'name' => 'Đầm body lập thể tay dài',
            //     'price' => 2300000,
            //     'img' => 'p35_large.jpg',
            // ],
            // [
            //     'name' => 'Giày Tennis T19 xanh',
            //     'price' => 1500000,
            //     'img' => 'p35_large.jpg',
            // ],
            // [
            //     'name' => 'Áo tennis nam Donexpro MC-8882-X',
            //     'price' => 400000,
            //     'img' => 'p35_large.jpg',
            // ],
            [
                'name' => 'Đầm body cá tình với nhiều màu sắc hiện đại-212',
                'price' => 1200000,
                'img' => "p35_large.jpg",
            ],
            [
                'name' => 'Đầm maxi dự tiệc hoa hồng - NH0282434',
                'price' => 1500000,
                'img' => 'p35_large.jpg',
            ],
            [
                'name' => 'Đầm body lập thể tay dài0-323',
                'price' => 2300000,
                'img' => 'p35_large.jpg',
            ],
            [
                'name' => 'Giày Tennis T19 xanh-3435',
                'price' => 1500000,
                'img' => 'p35_large.jpg',
            ],
            [
                'name' => 'Áo tennis nam Donexpro MC-8882-X-345534',
                'price' => 400000,
                'img' => 'p35_large.jpg',
            ],
        );

        $products  = array();

        for ($i=0; $i < count($arr_product); $i++) { 
            $products[$i] =  [
                'p_name' => $arr_product[$i]['name'],
                'p_slug' => Str::slug($arr_product[$i]['name']),
                'p_sku' => 'sp'.$i+5,
                'p_avatar' => $arr_product[$i]['img'],
                'p_price' =>  $arr_product[$i]['price'],
                'p_category_id' => rand(5,10),
                'p_brand_id' =>rand(2,8),
                'p_discount_id' =>rand(1,5),

            ];
        };

        foreach($products as $product){
            product::create($product);
        }
    }
}
