<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gym;
use App\Models\Prefecture;

class GymsTableSeeder extends Seeder
{
    public function run()
    {
        // まず、都道府県データがあることを確認
        $tokyo = Prefecture::firstOrCreate(['name' => '東京都']);
        $kanagawa = Prefecture::firstOrCreate(['name' => '神奈川県']);

        $gyms = [
            [
                'name' => '東京体育館',
                'address' => '東京都渋谷区千駄ヶ谷1-17-1',
                'prefecture_id' => $tokyo->id,
            ],
            [
                'name' => '横浜国際総合競技場',
                'address' => '神奈川県横浜市港北区小机町3300',
                'prefecture_id' => $kanagawa->id,
            ],
            // 他の体育館データを追加...
        ];

        foreach ($gyms as $gym) {
            Gym::create($gym);
        }
    }
}