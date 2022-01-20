<?php

namespace Database\Seeders;

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
    \App\Models\User::factory(50)->create();
    \App\Models\Links::factory(100)->create();
    \App\Models\Visitor::factory(2000)->create();
    \App\Models\DeletedLinks::factory(1000)->create();
  }
}
