<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE roles");
        DB::statement("TRUNCATE TABLE assigned_roles");

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $retailerRole = new Role;
        $retailerRole->name = 'retailer';
        $retailerRole->save();

        $userRole = new Role;
        $userRole->name = 'user';
        $userRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','dungho')->first();
        $user->attachRole( $retailerRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $userRole );
    }

}
