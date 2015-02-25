<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE roles");
        DB::statement("TRUNCATE TABLE assigned_roles");

        $superAdminRole = new Role;
        $superAdminRole->name = 'super_admin';
        $superAdminRole->save();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $userRole = new Role;
        $userRole->name = 'user';
        $userRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $superAdminRole );

        $user = User::where('username','=','dungho')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $userRole );
    }

}
