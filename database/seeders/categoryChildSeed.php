<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoryChild;
use Illuminate\Support\Str;

class categoryChildSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_categoryChild = array(
            [],
            [],
            [
                'Áo sơ mi',
                'Áo khoác',
                'Áo thun',
                'Áo vest, blazer',
            ],
            [
                'Bóng đá',
                'Bóng chuyền',
                'Bóng bàn',
                'Bơi Lội',
                'Cầu lông',
            ],
            [
                'Ghế cao cấp',
                'Ghế nhựa',
                'Bàn cao cấp',
                'Bàn chân sắt',
            ],
        );

        $categoryChilds = array();

        for ($i=1; $i < count($arr_categoryChild); $i++) { 
            for ($j=0; $j < count($arr_categoryChild[$i]); $j++) { 
                categoryChild::create(
                    [
                        'cchild_name' => $arr_categoryChild[$i][$j],
                        'cchild_slug' =>  Str::slug($arr_categoryChild[$i][$j]),
                        'cchil_parent' => $i,
                    ]
                );
            }
        };
    }
}
