<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Campaigns extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama'            => ['type' => 'varchar', 'constraint' => 255],
            'slug'            => ['type' => 'varchar', 'constraint' => 255],
            'alamat'            => ['type' => 'varchar', 'constraint' => 255],
            'deskripsi'            => ['type' => 'text'],
            'img1'         => ['type' => 'varchar', 'constraint' => 30],
            'img2'         => ['type' => 'varchar', 'constraint' => 30],
            'img3'         => ['type' => 'varchar', 'constraint' => 30],
            'active'           => ['type' => 'tinyint', 'constraint' => 1],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
            'deleted_at'       => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');

        $this->forge->createTable('campaigns', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('campaigns');
    }
}
