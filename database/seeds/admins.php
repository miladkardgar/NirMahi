<?php

use Illuminate\Database\Seeder;

class admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
           'name'=>"نیر ماهی",
            'email'=>'info@nirmahi.com',
            'password'=>\Illuminate\Support\Facades\Hash::make('123456'),
            'mobile'=>'09111159750'
        ]);
    }
}
