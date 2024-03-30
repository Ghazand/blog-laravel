<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        $user = \App\Models\User::factory()->create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ]);
        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
        // $user=User::factory()->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $personal= Category::create([
        //     'name'=>'personal',
        //     'slug'=>'personal'
        // ]);
        // $work= Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);
        // $family= Category::create([
        //     'name'=>'Famliy',
        //     'slug'=>'family'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'slug'=>'work',
        //     'title'=>'Work post',
        //     'excerpt'=>'skdnl akldj kknd klkasj d',
        //     'body'=>'skldkln wqjeiorp jwjq eoirjqwjero joiqwe jiwoerj iwjertiohgvnjqwheo w w ejoi '
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'slug'=>'family',
        //     'title'=>'famliy post',
        //     'excerpt'=>'skdnl akldj kknd klkasj d',
        //     'body'=>'skldkln wqjeiorp jwjq eoirjqwjero joiqwe jiwoerj iwjertiohgvnjqwheo w w ejoi'
        // ]);

    }
}
