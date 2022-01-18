<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;   //o folosesc pt a encripta parola
class admUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'alex',
            'e-mail'=>'alex@qa.com',
            'password'=>'0000'
        ]);
    }
}
