<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
            'image' => Str::random(60),
            'user_id' => '1',
            'title' => 'lorem',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, corporis quam tempora laborum unde, laudantium hic commodi reprehenderit fugiat perspiciatis illum at temporibus neque modi adipisci asperiores quia minus mollitia.',
        ]);

        Post::create([
            'image' => Str::random(60),
            'user_id' => '2',
            'title' => 'lorem',
            'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, corporis quam tempora laborum unde, laudantium hic commodi reprehenderit fugiat perspiciatis illum at temporibus neque modi adipisci asperiores quia minus mollitia.',
        ]);
    }
}
