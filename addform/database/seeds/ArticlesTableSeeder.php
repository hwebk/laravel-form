<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルにデータをinsert
        DB::table('articles')->insert([
            [
                'title' => 'タイトル1',
                'body'  => '内容1',
                'email' => 'kjaaa@gmail.com'
            ],
            [
                'title' => 'タイトル2',
                'body'  => '内容2',
                'email' => 'lkfjjflfjl@gmail.com'
            ],
            [
                'title'  => 'タイトル3',
                'body'  => '内容3',
                'email' => 'fkldjfdjjaa@gmail.com'
            ]
        ]);
    }
}
