<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255'
			],
			'panggilan' => [
				'type' => 'varchar',
				'constraint' => '255'
			],
			'tanggalLahir'	=> [
				'type'		=> 'DATE'
			],
			'alamat'	=> [
				'type'		=> 'varchar',
				'constraint' => '255'
			],
			'creted_at'	=> [
				'type'		=> 'DATETIME',
				'null'		=> true
			],
			'updated_at'	=> [
				'type'		=> 'DATETIME',
				'null'		=> true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('pin');
	}

	public function down()
	{
		$this->forge->dropTable('pin');
	}
}
