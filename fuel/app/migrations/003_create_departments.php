<?php

namespace Fuel\Migrations;

class Create_departments
{
	public function up()
	{
		\DBUtil::create_table('departments', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'depname' => array('constraint' => 50, 'type' => 'varchar'),
			'status' => array('type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('departments');
	}
}