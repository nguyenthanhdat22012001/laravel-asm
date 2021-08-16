<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
use Illuminate\Support\Str;

class categorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_category = array(
                [],
                [
                    'name' => 'Thời trang',
                    'img' => 's5.png',
                   'child' => [
                        'Áo sơ mi',
                        'Áo khoác',
                        'Áo thun',
                        'Áo vest, blazer',
                    ]
                ],
                [
                    'name' => 'Điện thoại & Ipad',
                    'img' => 's3.png',
                ],
                [
                    'name' =>   'Mỹ phẩm',
                    'img' =>   's6.png',
                ],
                [
                    'name' => 'Thể thao',
                    'img' => 's2.png',
                    'child' =>  [
                        'Bóng đá',
                        'Bóng chuyền',
                        'Bóng bàn',
                        'Bơi Lội',
                        'Cầu lông',
                    ],
                ],
                [
                    'name' =>  'Phụ kiện công nghệ',
                    'img' =>  's11.png',
                ],
                [
                    'name' =>   'Máy ảnh',
                    'img' => 's5.png',
                ],
                [
                    'name' =>   'Nội thất',
                    'img' => 's12.png',
                    'child' =>  [
                        'Ghế cao cấp',
                        'Ghế nhựa',
                        'Bàn cao cấp',
                        'Bàn chân sắt',
                    ],
                ],
            
    );

        $categories = array();
        
    for ($i=1; $i < count($arr_category); $i++) { 
        $categories[$i] =  [
            'id' => $i,
            'c_name' => $arr_category[$i]['name'],
            'c_slug' => Str::slug($arr_category[$i]['name']),
            'c_avatar' => $arr_category[$i]['img'],
        ];
    };

        foreach($categories as $category){
            category::create($category);
        }
        

        for ($i=1; $i < count($arr_category); $i++) { 
            if(array_key_exists('child',$arr_category[$i])){
                for ($j=0; $j < count($arr_category[$i]['child']); $j++) { 
                    category::create(
                        [
                            'c_name' => $arr_category[$i]['child'][$j],
                            'c_slug'  =>  Str::slug($arr_category[$i]['child'][$j]),
                            'c_parent' => $i,
                        ]
                    );
                }
            }
        };
    }
}
