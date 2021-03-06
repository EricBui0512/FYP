<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('CountriesTableSeeder');
        $this->call('CitiesTableSeeder');
        $this->call('DescriptionsTableSeeder');
        $this->call('BusinessCategoryTableSeeder');
        $this->call('AddressTableSeeder');
        $this->call('RetailerTableSeeder');
        $this->call('ImageTableSeeder');
        $this->call('OutletTableSeeder');
        $this->call('ServiceTableSeeder');

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}