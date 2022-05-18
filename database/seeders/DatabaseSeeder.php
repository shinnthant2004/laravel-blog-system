<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
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


        $blog1=Blog::factory(2)->create();
        $blog2=Blog::factory(2)->create();
        Comment::factory()->create(['blog_id'=>2,'user_id'=>1]);
        Comment::factory()->create(['blog_id'=>2,'user_id'=>2]);
    }

}
