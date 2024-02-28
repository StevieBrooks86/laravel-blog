<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'Steven Brooks'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Robby Clarke'
        ]);

        Post::factory(10)->create([
            'user_id' => $user1->id
        ]);





    }
}
