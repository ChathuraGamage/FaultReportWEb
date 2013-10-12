<?php
App::uses('AppModel', 'Model');
/**
 * Report Model
 *
 */
class Report extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'reportid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'reportid';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'reportid' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'reporterid' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This field is reqired',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'place' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This field is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'category' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter value 1 or 2',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'choose from "Not Processed","Processed","Validated","Processing" and "Processed"',
				'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
