<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users8')->insert([
            ['name' => 'артем',
            'email' => Str::random(10).'@gmail.com',
            'age'   => '18',
            'salary' =>'30000',
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
        
        [
            'name' => 'эдмон',
            'email' => Str::random(10).'@gmail.com',
            'age'   => '18',
            'salary' =>'30000',
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
        [
            'name' => 'иван',
            'email' => Str::random(10).'@gmail.com',
            'age'   => '20',
            'salary' =>'10000',
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',]
        ]);

         DB::table('posts8')->insert([
            ['title' => 'Новость 1',
            'slug'   => 'Пост 1',
            'likes' =>'30000',
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
        
        [
            'title' => 'Новость 2',
            'slug'   => 'Пост 2',
            'likes' =>'10000',
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
        [
            'title' => 'Новость 3',
            'slug'   => 'Пост 3',
            'likes' =>'20000',
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',]
        ]);
    }
}