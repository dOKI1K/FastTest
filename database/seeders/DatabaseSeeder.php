<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $user = User::factory()->create([
            'username' => 'lahuen_milla',
            'name' => 'Lahuen Millananco',
            'email' => 'lahuen60@gmail.com'
        ]);

        Post::factory(3)->create([
            'user_id' => $user->id
        ]);
    }
}
