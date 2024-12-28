<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            ['name' => '仙人', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '牛助', 'area_id' => 2],
        ]);

        DB::table('areas')->insert([
            ['name' => '戦慄', 'area_id' => 3],
        ]);

        DB::table('areas')->insert([
            ['name' => 'ルーク', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '志摩屋', 'area_id' => 3],
        ]);

        DB::table('areas')->insert([
            ['name' => '香', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => 'JJ', 'area_id' => 2],
        ]);

        DB::table('areas')->insert([
            ['name' => 'らーめん極み', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '鳥雨', 'area_id' => 2],
        ]);

        DB::table('areas')->insert([
            ['name' => '築地色合', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '晴海', 'area_id' => 2],
        ]);

        DB::table('areas')->insert([
            ['name' => '三子', 'area_id' => 3],
        ]);

        DB::table('areas')->insert([
            ['name' => '八戒', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '福助', 'area_id' => 2],
        ]);

        DB::table('areas')->insert([
            ['name' => 'らー北', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '翔', 'area_id' => 2],
        ]);

        DB::table('areas')->insert([
            ['name' => '経緯', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => '漆', 'area_id' => 1],
        ]);

        DB::table('areas')->insert([
            ['name' => 'THE TOOL', 'area_id' => 3],
        ]);

        DB::table('areas')->insert([
            ['name' => '木船', 'area_id' => 2],
        ]);
    }
}
