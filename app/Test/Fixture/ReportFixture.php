<?php
/**
 * ReportFixture
 *
 */
class ReportFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'report';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'report_id' => array('type' => 'string', 'null' => false, 'length' => 10, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'place' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'report_id', 'unique' => 1),
			'category' => array('column' => 'category', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'report_id' => 'Lorem ip',
			'reporter_id' => 'Lorem ip',
			'place' => 'Lorem ipsum dolor ',
			'category' => 1,
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);

}
