<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        	'name'=>'Administrator',
        	'email'=>'admin@admin.com',
            'alias'=>Str::slug('Admin Admin','-'),
            'user_name'=>'Admin',
        	'role_id'=> 1,
        	'phone'=>1234567890,
        	'password'=>password_hash('1234567890', PASSWORD_DEFAULT)
        ]);
    }
}
