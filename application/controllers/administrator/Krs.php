<?php 

	/**
	 * 
	 */
	class Krs extends CI_Controller
	{
		
		public function index()
		{
			$data = array(
				'nim' 			=> set_value('nim') ,
				'id_thn_akad'	=> set_value('id_thn_akad') ,
			);

			$this->load->view('templates_administrator/header');
			$this->load->view('templates_administrator/sidebar');
			$this->load->view('administrator/masuk_krs', $data);
			$this->load->view('templates_administrator/footer');
		}
	}

?>