<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    /*追加用テンプレ 初期値
        DB::table('users')->insert([
            'name'=>'',
            'email'=>'',
            'password'=>'',
            'department'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        */

        DB::table('users')->insert([
            'name'=>'大阪太郎',
            'email'=>'xx@gmail.com',
            'password'=>'osaka1234',
            'department'=>'経理',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('users')->insert([
            'name'=>'梅田花子',
            'email'=>'uu@gmail.com',
            'password'=>'umeda1234',
            'department'=>'総務',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('users')->insert([
            'name'=>'摂津次郎',
            'email'=>'ss@gmail.com',
            'password'=>'settu1234',
            'department'=>'人事',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}