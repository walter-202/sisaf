<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2023-07-07 02:43:33',
                'id' => 1,
                'name' => 'Category 1',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'category-1',
                'updated_at' => '2023-07-07 02:43:33',
            ),
            1 => 
            array (
                'created_at' => '2023-07-07 02:43:33',
                'id' => 2,
                'name' => 'Category 2',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'category-2',
                'updated_at' => '2023-07-07 02:43:33',
            ),
        ));
        
        
    }
}