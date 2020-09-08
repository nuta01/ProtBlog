<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'post_user_id' => '@ichiro',
            'post_title' => 'タイトル１',
            'text' => 'これはテスト記事です。seederによって作成されました。1',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'post_user_id' => '@jiro',
            'post_title' => 'タイトル２',
            'text' => 'これはテスト記事です。seederによって作成されました。2',
        ];
        DB::table('posts')->insert($param);

        $param = [
            'post_user_id' => '@saburo',
            'post_title' => 'タイトル３',
            'text' => 'これはテスト記事です。seederによって作成されました。3',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'post_user_id' => '@siro',
            'post_title' => 'タイトル４',
            'text' => 'これはテスト記事です。seederによって作成されました。4',
        ];
        DB::table('posts')->insert($param);
        $param = [
            'post_user_id' => '@goro',
            'post_title' => 'タイトル５',
            'text' => 'これはテスト記事です。seederによって作成されました。5',
        ];
        DB::table('posts')->insert($param);
    }
}
