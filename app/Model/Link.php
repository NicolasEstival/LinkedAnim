<?php
App::uses('AppModel', 'Model');
/**
 * Link Model
 *
 * @property Mangas $Mangas
 */
class Link extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mangas_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mid' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Mangas' => array(
			'className' => 'Mangas',
			'foreignKey' => 'mangas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mangas2' => array(
			'className' => 'Mangas',
			'foreignKey' => 'mid',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
		

}
