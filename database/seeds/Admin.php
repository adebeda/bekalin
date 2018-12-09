<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
           'name'=>'adminBekalin',
    		'email'=>'admin@bekalin.com',
    		'password'=>bcrypt('admin123'),
        ));
    }
}
