<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テスト用ユーザー
        DB::table('users')->insert([
            [
                'name' => 'testUser',
                'email' => 'test@example.co.jp',
                'email_verified_at' => 'test@example.co.jp',
                'password' => 'aaaaaaaa',
                'remember_token' => bcrypt('aaaaaaaa'),
            ],
        ]);
    }
}
