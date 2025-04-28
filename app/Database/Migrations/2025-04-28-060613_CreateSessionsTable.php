<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'VARCHAR', 'constraint' => '255'],
            'ip_address'  => ['type' => 'VARCHAR', 'constraint' => '64'],
            'data'        => ['type' => 'LONGTEXT', 'null' => true],
            'timestamp'   => ['type' => 'INT',      'unsigned' => true,'null' => false],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sessions');
    }

    public function down()
    {
        $this->forge->dropTable('sessions');
    }
}
