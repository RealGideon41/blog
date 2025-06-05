<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("posts")->insert([
            [
                "title" => "First Post",
                "slug" => "first-post",
                "content" => "This is the content of the first post.",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "title" => "Second Post",
                "slug" => "second-post",
                "content" => "This is the content of the second post.",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
