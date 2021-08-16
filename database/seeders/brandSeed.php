<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\brand;
use Illuminate\Support\Str;

class brandSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $arr_brand = array(
                    
                    [
                        'name' => 'computo',
                        'img' => 's5.png',
                    ],
                    [
                        'name' => 'samsung',
                        'img' => 's3.png',
                    ],
                    [
                        'name' =>   'Elsa',
                        'img' =>   's6.png',
                    ],
                    [
                        'name' => 'Nokia',
                        'img' => 's2.png',
                    ],
                    [
                        'name' =>  'Apple',
                        'img' =>  's11.png',
                    ],
                    [
                        'name' =>   'Kabgaru',
                        'img' => 's5.png',
                    ],
                    [
                        'name' =>   'Dell',
                        'img' => 's12.png',
                    ],
                
        );

            $brands = array();
            
        for ($i=0; $i < count($arr_brand); $i++) { 
            $brands[$i] =  [
                'id' => $i + 1,
                'br_name' => $arr_brand[$i]['name'],
                'br_slug' => Str::slug($arr_brand[$i]['name']),
                'br_avatar' => $arr_brand[$i]['img'],
            ];
        };

        

            foreach($brands as $category){
                brand::create($category);
            }
    }
}
