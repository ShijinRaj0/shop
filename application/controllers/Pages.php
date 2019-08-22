<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->load->model('Db_model');
        }
        
	public function index()
	{
		redirect('pages/home');
	}

	public function home()
	{
		$this->load->view('frontend/home');
	}

	public function contact()
	{
		$this->load->view('frontend/contact');
	}

	public function cart()
	{
		$this->load->view('frontend/cart');
	}
}
