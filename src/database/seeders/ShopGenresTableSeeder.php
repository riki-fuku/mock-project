<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShopGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'genre_name' => 'イタリアン',
            ],
            [
                'genre_name' => 'ラーメン',
            ],
            [
                'genre_name' => '居酒屋',
            ],
            [
                'genre_name' => '寿司',
            ],
            [
                'genre_name' => '焼肉',
            ],
        ];

        $now = Carbon::now();
        foreach ( $params as $param ) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('shop_genres')->insert($param);
        }
    }
}
