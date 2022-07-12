<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
        ]);
        //User::factory(5)->create();
       //User::factory(1)->admin()->create();
       //User::factory(5)
       //->client()
       //->has(Ticket::factory()->count(3))
       //->create();
       //Ticket::factory()->create();
    }
}
