<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $user1 = User::factory()->create([
            'name' => 'Said Omar'
        ]);

        $category1 = Category::factory()->create();

        Post::factory(5)->create([
            'user_id' => $user1->id,
            'category_id' => $category1->id
        ]);

        $user2 = User::factory()->create([
            'name' => 'Osama Kamel'
        ]);

        $category2 = Category::factory()->create();

        Post::factory(5)->create([
            'user_id' => $user2->id,
            'category_id' => $category2->id
        ]);
    }
}
