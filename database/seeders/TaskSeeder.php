<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // paramに配列を代入
        $param = [
            [
                'title' => 'タスク111タイトル',
                'body' => 'タスク111本文タスク111本文タスク111本文タスク111本文タスク111本文タスク111本文'
            ],
            [
                'title' => 'タスク222タイトル',
                'body' => 'タスク222本文タスク222本文タスク222本文タスク222本文タスク222本文タスク222本文'
            ],
            [
                'title' => 'タスク333タイトル',
                'body' => 'タスク333本文タスク333本文タスク333本文タスク333本文タスク333本文タスク333本文'
            ]
        ];
        // DB::table->insertでレコードの登録
        DB::table('tasks')->insert($param);
    }
}
