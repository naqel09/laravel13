<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Andry Septian Syahputra Tumaruk',
        //     'email' => 'andrytumaruk@gmail.com',
        //     'password'=> bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'dody firmansyah',
        //     'email' => 'dodyfirmansyah@gmail.com',
        //     'password'=> bcrypt('123456')
        // ]);

        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming'      
        ]);

        Category::create([
            'name'=> 'Personal Blog',
            'slug'=> 'personal-blog'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'postingan pertama',
        //     'slug' => 'postingan-pertama',
        //     'content' => 'hello world'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'postingan kedua',
        //     'slug' => 'postingan-kedua',
        //     'content' => 'hello world'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'postingan ketiga',
        //     'slug' => 'postingan-ketiga',
        //     'content' => 'hello world'
        // ]);
    }
}
