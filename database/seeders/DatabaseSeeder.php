<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();

        User::factory()->create();

        $frontend=Category::create([
            'name'  => 'frontend',
            'slug'  => 'frontend'
        ]);

        $backend=Category::create([
            'name'  => 'backend',
            'slug'  => 'backend'
        ]);

        Blog::create([
            'title' => "frontend post",
            'slug'  => "frontend-post",
            'intro' => "this is intro",
            'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
            'category_id'=>$frontend->id,
        ]);

        Blog::create([
            'title' => "backend post",
            'slug'  => "backend-post",
            'intro' => "this is intro",
            'body'  => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
            'category_id'=>$backend->id,
        ]);
    }
}
