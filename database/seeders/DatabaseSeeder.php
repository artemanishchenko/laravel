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
    public function run()
		{
			DB::table('posts10')->insert([
            ['title' => Str::random(5),
            'desc' => Str::random(10),
            'text'   => Str::random(10).Str::random(10).Str::random(10),
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
        
        ['title' => Str::random(5),
            'desc' => Str::random(10),
            'text'   => Str::random(10).Str::random(10).Str::random(10),
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],

         ['title' => Str::random(5),
            'desc' => Str::random(10),
            'text'   => Str::random(10).Str::random(10).Str::random(10),
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
         ['title' => Str::random(5),
            'desc' => Str::random(10),
            'text'   => Str::random(10).Str::random(10).Str::random(10),
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ],
         ['title' => Str::random(5),
            'desc' => Str::random(10),
            'text'   => Str::random(10).Str::random(10).Str::random(10),
            'created_at' =>'2026-02-23',
            'updated_at' =>'2026-03-23',
        ]]);
		}
	}