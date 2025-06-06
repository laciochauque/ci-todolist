<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'name'        => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => false],
            'email'       => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => false],
            'password'    => ['type' => 'TEXT', 'null' => false],
            'contact'     => ['type' => 'VARCHAR', 'constraint' => '15', 'null' => true],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey("email");
        $this->forge->addUniqueKey("contact");
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
