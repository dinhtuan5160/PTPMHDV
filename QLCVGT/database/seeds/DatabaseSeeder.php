<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'name'=>'MinhHieu',
        	'email'=>'MinhHieu@gmail.com',
        	'password'=>bcrypt('123'),
            'id_major'=>7,
            'id_role'=>13
        ]);
    }
}
