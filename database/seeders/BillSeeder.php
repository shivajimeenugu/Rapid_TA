<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\bill::factory(10)->create();
    }
}
