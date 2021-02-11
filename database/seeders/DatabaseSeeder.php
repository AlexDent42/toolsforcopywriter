<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	 // User::factory(100)->create();
         \App\Models\Comment::factory(10)->create();
    }
}
