<?php

class AddressTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE addresses");

        $cityId = City::select('id')
            ->where('city', 'Da Nang')
            ->first()
            ->id;

        $address = array(
            '306 - đường 2/9, Hai Chau',
            '225 Nguyễn Chí Thanh, Hai Chau',
            '123 Nguyen Van Linh, Hai Chau',
            '328 Hoang Dieu, Hai Chau',
            '423 Nguyen Huu Tho, Hai Chau'
        );

        foreach ($address as $add) {

            $address = new Address;

            $address->city_id = $cityId;
            $address->address = $add;
            $address->created_at = new DateTime;
            $address->updated_at = new DateTime;

            $address->save();
        }
    }

}
