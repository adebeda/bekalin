<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// //Permissons
        DB::table('permissions')->delete();

        DB::table('users')->delete();
        $permissions = [
        	['name'=>'view_kurir', 'guard_name'=>'web', 'created_at'=>now(), 'updated_at'=>now()],
        	['name'=>'view_admin', 'guard_name'=>'web', 'created_at'=>now(), 'updated_at'=>now()],
        	['name'=>'view_pengguna', 'guard_name'=>'web', 'created_at'=>now(), 'updated_at'=>now()],
        	['name'=>'edit_pengguna', 'guard_name'=>'web', 'created_at'=>now(), 'updated_at'=>now()],
        ];

        DB::table('permissions')->insert($permissions);

     //    //Roles
        DB::table('roles')->delete();
        $roles = [
        	['name'=>'Admin', 'guard_name'=>'web', 'created_at'=>now(), 'updated_at'=>now()],
        	['name'=>'User', 'guard_name'=>'web', 'created_at'=>now(), 'updated_at'=>now()],
        ];
        DB::table('roles')->insert($roles);

        //Role Has Permissions
        DB::table('role_has_permissions')->delete();
        $role_has_permissions = [
        	['permission_id'=>'1', 'role_id'=>'1'],
        	['permission_id'=>'2', 'role_id'=>'1'],
        	['permission_id'=>'3', 'role_id'=>'1'],
        	['permission_id'=>'4', 'role_id'=>'1'],
        ];
        DB::table('role_has_permissions')->insert($role_has_permissions);
        

        
        DB::table('users')->delete();

        $user = [
            ['no_ktp'=>'123', 'name'=>'ozura','no_rek'=>'123456','alamat'=>'sukoharjo','pekerjaan'=>'pelajar','email'=>'ozura@gmail.com','password'=>bcrypt('123456')]
        ];
        DB::table('users')->insert($user);


        echo "Seed sukses";


    }
}
