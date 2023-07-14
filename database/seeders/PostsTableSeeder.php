<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'author_id' => 0,
                'body' => '<p>This is the body of the lorem ipsum post</p>',
                'category_id' => 1,
                'created_at' => '2023-07-07 02:43:33',
                'excerpt' => 'This is the excerpt for the Lorem Ipsum Post',
                'featured' => 0,
                'id' => 1,
                'image' => 'posts/post1.jpg',
                'meta_description' => 'This is the meta description',
                'meta_keywords' => 'keyword1, keyword2, keyword3',
                'seo_title' => '2',
                'slug' => 'lorem-ipsum-post',
                'status' => 'PUBLISHED',
                'title' => 'Lorem Ipsum Post',
                'updated_at' => '2023-07-07 02:43:33',
            ),
        ));
        
        
    }
}