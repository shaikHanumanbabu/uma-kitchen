<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Kitchen;
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
        // \App\Models\User::factory(10)->create();
        // Kitchen::factory(5)->create();
        Contact::factory(20)->create(['status' => 1]);
    }
}
