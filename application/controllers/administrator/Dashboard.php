<?php

/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if($this->login_model->isNotLogin()) redirect(base_url('administrator/auth/'));
	}

	public function index()
	{
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/dashboard');
		$this->load->view('templates_administrator/footer');
	}
}

?>
