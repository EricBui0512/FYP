<?php

class BusinessCategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::statement("TRUNCATE TABLE business_categories");

        $category = new BusinessCategory;
        $category->name = 'Category one';
        $category->created_at = new DateTime;
        $category->updated_at = new DateTime;
        $category->save();

        $category = new BusinessCategory;
        $category->name = 'Category two';
        $category->created_at = new DateTime;
        $category->updated_at = new DateTime;
        $category->save();
    }

}
