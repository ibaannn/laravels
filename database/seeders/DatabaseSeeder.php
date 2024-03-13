<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
                'name' => 'Gibran Ilham Budiman',
                'username' => 'gibran',
                'email' => 'luckysnow995@gmail.com',
                'password' => bcrypt('12345')
            ]);
            
            User::create([
            'name' => 'Sisca Putri Pratiwi',
            'username' => 'sisca',
            'email' => 'skyptr35@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::factory(3)->create();
        Post::factory(10)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        
    }
}
