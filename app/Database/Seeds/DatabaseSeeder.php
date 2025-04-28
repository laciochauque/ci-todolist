<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected array $seeders = [
        UsersSeeder::class,
        TasksSeeder::class,
    ];
    public function run()
    {
        $this->db->disableForeignKeyChecks();
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
        $this->db->enableForeignKeyChecks();
    }
}
