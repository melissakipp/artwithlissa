<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();

        User::truncate();
        User::factory()->create();

//        Post::truncate();
//        Post::factory(5)->create();

        Schema::enableForeignKeyConstraints();
    }
}
