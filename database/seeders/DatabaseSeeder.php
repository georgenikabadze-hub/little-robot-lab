<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
        $users = User::factory(10)->create();
        $categories = Category::factory(4)->create();

        foreach ($users as $user) {
            Post::factory(5)->create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}
