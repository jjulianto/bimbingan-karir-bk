<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nis'       => [
				'type'           => 'INT',
				'constraint'     => '20',
				'null'           => true,
			],
			'nip'       => [
				'type'           => 'INT',
				'constraint'     => '20',
				'null'           => true,
			],
			'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'jenis_kelamin'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
			'kelas'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
				'null'           => true,
			],
			'jurusan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'           => true,
			],
			'tanggal_lahir'      => [
				'type'           => 'DATE',
				'null'           => true,
			],
			'alamat' => [
				'type'           => 'TEXT',
			],
			'no_telp'      => [
				'type'           => 'INT',
				'constraint'     => 20,
			],
			'gambar'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'username'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'role'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addField('created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
		$this->forge->createTable('user', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
