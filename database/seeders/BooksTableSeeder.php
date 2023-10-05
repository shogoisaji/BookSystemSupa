<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*追加用テンプレ 初期値recommendation:0,comment:'',discription:''
        DB::table('books')->insert([
            'isbn'=>,
            'title'=>'',
            'author'=>'',
            'discription'=>'',
            'resourceLink'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        */

        DB::table('books')->insert([
            'isbn'=>9784780802047,
            'title'=>'おにぎりレシピ101',
            'author'=>'山田　玲子',
            'discription'=>'海外でも人気の日本のソウルフード、おにぎり。クッキングアドバイザー・山田玲子が考えた101のレシピを英訳付きでご紹介します。',
            'resourceLink'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('books')->insert([
            'isbn'=>9784297128524,
            'title'=>'図解でやさしくわかるネットワークのしくみ超入門 : フルカラーイラストでネットワークがわかる',
            'discription'=>'フルカラーイラストでネットワークがわかる',
            'author'=>'網野　衛二',
            'resourceLink'=>'',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('books')->insert([
            'isbn'=>9784800712349,
            'title'=>'いちばんやさしいSQL入門教室',
            'author'=>'矢沢　久雄',
            'discription'=>'データベースとSQLの基本と操作がしっかり学べます',
            'resourceLink'=>'https://cover.openbd.jp//9784780802047.jpg',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
