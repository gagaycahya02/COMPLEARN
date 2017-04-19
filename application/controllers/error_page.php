<?php 
	class ERROR_PAGE extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$this->output->set_status_header('404'); // Setting Header
			$this->load->view('error_404');
		}
	}
?>