<?php

class ImageTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE images");
        
        $image = new Image;
        $image->image_path = 'asset/upload/D4C21840-5F68-48EA-A63E-7AC4C3D9B43A.JPG';
        $image->created_at = new DateTime;
        $image->updated_at = new DateTime;
        $image->save();
    }

}
