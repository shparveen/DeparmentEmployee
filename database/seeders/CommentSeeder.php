<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
  /**
    * Seed the application's database.
    *
    * @return void
    */
  public function run()
  {
    Comment::factory()
      ->times(3)
      ->create();
  }
}