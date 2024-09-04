<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi maxime aliquid velit animi illum ut, pariatur laudantium veritatis fugit ducimus itaque unde asperiores debitis a esse nulla! Suscipit, voluptate nulla.'
        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}
