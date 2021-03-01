<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterCreated extends Migration
{
	public function up()
	{
		$this->forge->addColumn('user', [
			'updated_at DATETIME'
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('user', 'updated_at');
	}
}
