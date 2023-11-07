<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShopAreasTableSeeder extends Seeder
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
                'area_name' => '東京都',
            ],
            [
                'area_name' => '大阪府',
            ],
            [
                'area_name' => '福岡県',
            ],
        ];

        $now = Carbon::now();
        foreach ( $params as $param ) {
            $param['created_at'] = $now;
            $param['updated_at'] = $now;
            DB::table('shop_areas')->insert($param);
        }
    }
}
