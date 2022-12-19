<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'title' => 'title one',
            'status' => 'active',
            'image' => 'qwerty',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, corporis recusandae assumenda eligendi ab soluta harum obcaecati quam sit debitis nostrum perspiciatis? Vitae voluptate nostrum maxime eveniet obcaecati sed autem.'
        ]);

        Post::create([
            'title' => 'title two',
            'status' => 'active',
            'image' => 'qwerty',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, corporis recusandae assumenda eligendi ab soluta harum obcaecati quam sit debitis nostrum perspiciatis? Vitae voluptate nostrum maxime eveniet obcaecati sed autem.'
        ]);


    }
}
