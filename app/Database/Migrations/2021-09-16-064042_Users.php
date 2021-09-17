<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'no_hp'       => [
				'type'           => 'INT',
				'constraint'     => '100',
			],
            'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
            'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
		$this->forge->addPrimaryKey('id_user', true);
		$this->forge->createTable('tb_users');
    }

    public function down()
    {
        $this->forge->dropTable('tb_users');
    }
}
