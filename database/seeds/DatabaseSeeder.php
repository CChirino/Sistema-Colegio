<?php

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
        $this->call(ColegioSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(PensumSeeder::class);
        $this->call(PeriodoSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(MateriasSeeder::class);
    }
}
