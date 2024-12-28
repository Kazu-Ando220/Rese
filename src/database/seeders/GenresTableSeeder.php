<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => '仙人', 'genre_id' => 11],
        ]);

        DB::table('genres')->insert([
            ['name' => '牛助', 'genre_id' => 12],
        ]);

        DB::table('genres')->insert([
            ['name' => '戦慄', 'genre_id' => 13],
        ]);

        DB::table('genres')->insert([
            ['name' => 'ルーク', 'genre_id' => 14],
        ]);

        DB::table('genres')->insert([
            ['name' => '志摩屋', 'genre_id' => 15],
        ]);

        DB::table('genres')->insert([
            ['name' => '香', 'genre_id' => 12],
        ]);

        DB::table('genres')->insert([
            ['name' => 'JJ', 'genre_id' => 14],
        ]);

        DB::table('genres')->insert([
            ['name' => 'らーめん極み', 'genre_id' => 15],
        ]);

        DB::table('genres')->insert([
            ['name' => '鳥雨', 'genre_id' => 13],
        ]);

        DB::table('genres')->insert([
            ['name' => '築地色合', 'genre_id' => 11],
        ]);

        DB::table('genres')->insert([
            ['name' => '晴海', 'genre_id' => 12],
        ]);

        DB::table('genres')->insert([
            ['name' => '三子', 'genre_id' => 12],
        ]);

        DB::table('genres')->insert([
            ['name' => '八戒', 'genre_id' => 13],
        ]);

        DB::table('genres')->insert([
            ['name' => '福助', 'genre_id' => 11],
        ]);

        DB::table('genres')->insert([
            ['name' => 'らー北', 'genre_id' => 15],
        ]);

        DB::table('genres')->insert([
            ['name' => '翔', 'genre_id' => 13],
        ]);

        DB::table('genres')->insert([
            ['name' => '経緯', 'genre_id' => 11],
        ]);

        DB::table('genres')->insert([
            ['name' => '漆', 'genre_id' => 12],
        ]);

        DB::table('genres')->insert([
            ['name' => 'THE TOOL', 'genre_id' => 14],
        ]);

        DB::table('genres')->insert([
            ['name' => '木船', 'genre_id' => 11],
        ]);
    }
}
