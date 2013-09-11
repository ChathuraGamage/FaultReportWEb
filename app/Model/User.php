<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'userid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'userid';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'userid' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Username field cannot be empty',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your password',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                        'Match passwords'=>array(
                                'rule'=>'matchpasswords',
                                'message'=>'Your passwords do not match'
                        ),
		),
                'password_confirmation' => array(
                            'notempty' => array(
                                    'rule' => array('notempty'),
                                    'message' => 'Please confirm your password',
                                    //'allowEmpty' => false,
                                    //'required' => false,
                                    //'last' => false, // Stop validation after this rule
                                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                            ),
                    ),
            
            
		'role' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Role cannot be empty',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
                    'check valid'=>array(
                                'rule'=>'setvalid',
                                'message'=>'Please enter a valid value Eg: admin, regular'
                        ),
		),
                
	);
        
        public function matchpasswords($data){
            if($data['password']==$this->data['User']['password_confirmation']){
                return true;
            }
            $this->invalidate('password_confirmation','Your passwords do not match');
            return false;
        }
        public function setvalid($data){
            if($data['role']=='regular' || $data['role']=='admin'){
                return true;
            }
            return false;
        }
        
        public function beforeSave() {
            if(isset($this->data['User']['password'])){
                $this->data['User']['password']=  AuthComponent::password($this->data['User']['password']);
            }
            return true;
        }
}
