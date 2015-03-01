<?php

class ServiceTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE services");

        $adminId = User::select('id')->where('username', 'dungho')->first()->id;

        $services = array(
            'Xông hơi thảo dược',
            'Waxing nách',
            'Mặt nạ cao bí đao'
        );

        foreach ( $services as $service ) {

            $sv = new Service;

            $sv->name = $service;
            // $sv->admin_id = $adminId;
            $sv->outlet_id = rand(1,4);
            $sv->active = 1;
            $sv->created_at = new DateTime;
            $sv->updated_at = new DateTime;

            $sv->save();
        }
    }

}
