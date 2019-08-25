<?php

class Form_model extends CI_Model {

	function __construct() 
		{
		parent::__construct();
		$this->load->helper('form');
        $this->load->library('form_validation');
		}
	public function admin_log_val(){
		$config = array(
        array(
                'field' => 'log_uid',
                'label' => 'Admin UID',
                'rules' => 'required',
        ),
        array(
                'field' => 'log_password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
        ),
		);
	$this->form_validation->set_rules($config);
	}
}