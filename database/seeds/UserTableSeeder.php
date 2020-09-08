<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '@ichiro',
            'email' => 'ichiro@gmail.com',
            'password' => 'ichiro_pass',
        ];
        DB::table('user')->insert($param);

        $param = [
            'name' => '@jiro',
            'email' => 'jiro@gmail.com',
            'password' => 'jiro_pass',
        ];
        DB::table('user')->insert($param);

        $param = [
            'name' => '@saburo',
            'email' => 'saburo@gmail.com',
            'password' => 'saburo_pass',
        ];
        DB::table('user')->insert($param);

        $param = [
            'name' => '@siro',
            'email' => 'siro@gmail.com',
            'password' => 'siro_pass',
        ];
        DB::table('user')->insert($param);
        
        $param = [
            'name' => '@goro',
            'email' => 'goro@gmail.com',
            'password' => 'goro_pass',
        ];
        DB::table('user')->insert($param);

        

    }
}
