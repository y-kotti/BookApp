<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => '線形代数',
                'cost' => 1800,
                'memo' => '線形代数の基本です',
            ],
            [
                'title' => '基礎解析',
                'cost' => 2100,
                'memo' => '解析学の基本です',
            ],
        ]);
    }
}
