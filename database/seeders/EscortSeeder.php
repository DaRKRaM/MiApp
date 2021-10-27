<?php

namespace Database\Seeders;
use App\Models\Escort;
use Illuminate\Database\Seeder;

class EscortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escort::factory(20)->create();
    }
}
