<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
//         $user = User::factory(1)->create();
//         $category = Category::factory(1)->create();
//        Post::factory()->create([
//             'user_id' => ,
//             'category_id' => ,
//         ]);
        Post::factory(10000)->create();
    }
}
