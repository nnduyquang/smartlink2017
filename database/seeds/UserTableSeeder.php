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
        DB::table('users')->insert([
            'name'=>'nnduyquang',
            'email'=>'nnduyquang@gmail.com',
            'password'=>bcrypt('123456'),
            'created_at'=>\Carbon\Carbon::now()
        ]);
    }
}
