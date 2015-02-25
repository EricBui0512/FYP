<?php

class CitiesTableSeeder extends Seeder {

    public function run()
    {
        // DB::table('cities')->delete();
        DB::statement("TRUNCATE TABLE cities");

        $cities = array(
                'Can Tho','Da Nang','Hai Phong','Ha Noi','Ho Chi Minh City',
                'Ba Ria Vung Tau','Bac Lieu','Bac Giang','Bac Ninh','Bao Loc',
                'Bien Hoa','Ben Tre','Buon Ma Thuot','Ca Mau','Cam Pha','Cao Lanh',
                'Da Lat','Dien Bien Phu','Dong Ha','Dong Hoi','Ha Tinh','Ha Long',
                'Hai Duong','Hoa Binh','Hoi An','Hue','Hung Yen','Kon Tum','Lang Son',
                'Lao Cai','Long Xuyen','Mong Cai','My Tho','Nam Dinh','Ninh Binh',
                'Nha Trang','Cam Ranh','Phan Rang-Thap Cham','Phan Thiet','Phu Ly',
                'Pleiku','Quang Ngai','Quy Nhon','Rach Gia','Soc Trang','Son La',
                'Tam Ky','Tan An','Thai Binh','Thai Nguyen','Thanh Hoa','Tra Vinh',
                'Tuy Hoa','Tuyen Quang','Uong Bi','Viet Tri','Vinh','Vinh Yen',
                'Vinh Long','Vung Tau','Yen Bai'
            );

        $vnId = DB::table('countries')
            ->select('id')
            ->where('country', 'Vietnam')
            ->first()
            ->id;
            
        foreach ( $cities as $key => $city ) {
            
            $c = array(
                array(
                    'city' => $city,
                    'id_country' => $vnId,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            );

            DB::table('cities')->insert( $c );
        }
        
    }

}
