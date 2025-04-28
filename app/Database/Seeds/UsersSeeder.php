<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
class UsersSeeder extends Seeder
{
    protected $table        = 'users';
    protected $primaryKey   = 'id';  
    protected $data = [
        [
            "id"        =>1,
            "name"      =>"Lácio Lourenço Chaúque",
            "email"     =>"laciochauque7@gmail.com",
            "password"  =>"123456",
            "contact"   =>"+258820000001",
            "created_at"=>"2025-04-27",
            "updated_at"=>"2025-04-27"
        ],
        [
            "id"        =>2,
            "name"      =>"Ambrósio Patricio Vumo",
            "email"     =>"ambosiovumo@gmail.com",
            "password"  =>"123456",
            "contact"   =>"+258820000002",
            "created_at"=>"2025-04-27",
            "updated_at"=>"2025-04-27"
        ],
    ];
    public function run()
    {
        $this->db->disableForeignKeyChecks();
        $this->db->table($this->table)->truncate();
        $this->db->enableForeignKeyChecks();
        foreach ($this->data as $user) {
            $user['password'] = password_hash($user['password'], PASSWORD_BCRYPT);
            $this->db->table($this->table)->insert($user);
        }   
    }
}
