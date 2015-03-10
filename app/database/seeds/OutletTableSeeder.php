<?php

class OutletTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE outlets");
        
        $adminId = User::select('id')->where('username', 'dungho')->first()->id;
        $retailerMT = Retailer::select('id')->where('company_register_id', 'MT00001')->first()->id;
        $retailerPL = Retailer::select('id')->where('company_register_id', 'PL00001')->first()->id;

        $outlets = array(
            array( 'name' => 'Minh Toan Graxy - Spa Beauty', 
                'outlet_register_id' => 'MTID001', 
                'website' => 'www.minhtoan.com.vn', 
                'retailer_id' => $retailerMT,
            ),
            array( 'name' => 'Minh Toan Graxy - Spa One', 
                'outlet_register_id' => 'MTID002', 
                'website' => 'www.minhtoan.com.vn', 
                'retailer_id' => $retailerMT,
            ),
            array( 'name' => 'Minh Toan Graxy - Spa Two', 
                'outlet_register_id' => 'MTID003', 
                'website' => 'www.minhtoan.com.vn', 
                'retailer_id' => $retailerMT,
            ),
            array( 'name' => 'Phi Lu - Spa Beauty', 
                'outlet_register_id' => 'PLID001', 
                'website' => 'www.philu.com.vn', 
                'retailer_id' => $retailerPL,
            ),
        );

        foreach ( $outlets as $key => $value ) {
            
            $outlet = new Outlet;

            $outlet->name = $value['name']; 
            $outlet->address_id = rand(1,5);
            $outlet->outlet_register_id = $value['outlet_register_id']; 
            $outlet->website = $value['website'];
            $outlet->admin_id = $adminId;
            $outlet->description_id = 1;
            $outlet->status = 'active';
            $outlet->retailer_id = $value['retailer_id'];

            $outlet->save();
        }

    }

}
