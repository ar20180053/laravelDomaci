<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        Category::truncate();
        User::truncate();
        Post::truncate();


        $user = User::factory()->create();
        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();
        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $cat1->id,
        ]);
        Post::factory(3)->create([
            'user_id' => $user->id,
            'category_id' => $cat2->id,
        ]);
        // $cat3 = Category::create(['name' => 'Fun', 'slug' => 'fun']);

        // $post1 = Post::create([
        //     'title' => 'Personal post',
        //     'slug' => 'personal-post',
        //     'excerpt' => 'Personal post excerpt',
        //     'body' => 'Personal post content',
        //     'user_id' => $user->id,
        //     'category_id' => $cat1->id
        // ]);

        // $post2 = Post::create([
        //     'title' => 'Work post',
        //     'slug' => 'work-post',
        //     'excerpt' => 'Work post excerpt',
        //     'body' => 'Work post content',
        //     'user_id' => $user->id,
        //     'category_id' => $cat2->id
        // ]);

        // $post3 = Post::create([
        //     'title' => 'Fun post',
        //     'slug' => 'fun-post',
        //     'excerpt' => 'Fun post excerpt',
        //     'body' => 'Fun post content',
        //     'user_id' => $user->id,
        //     'category_id' => $cat3->id
        // ]);
    }
}
