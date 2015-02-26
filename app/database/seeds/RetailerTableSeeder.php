<?php

class RetailerTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE retailers");
        
        $adminId = User::select('id')->where('username', 'dungho')->first()->id;

        $retailer = new Retailer;
        $retailer->name = 'Minh Toan Graxy';
        $retailer->category_id = 1;
        $retailer->address_id = 1;
        $retailer->admin_id = $adminId;
        $retailer->company_register_id = 'MT00001';
        $retailer->created_at = new DateTime;
        $retailer->updated_at = new DateTime;
        $retailer->save();

        $retailer = new Retailer;
        $retailer->name = 'Phi Lu';
        $retailer->category_id = 1;
        $retailer->address_id = 2;
        $retailer->admin_id = $adminId;
        $retailer->company_register_id = 'PL00001';
        $retailer->created_at = new DateTime;
        $retailer->updated_at = new DateTime;
        $retailer->save();

    }
}
