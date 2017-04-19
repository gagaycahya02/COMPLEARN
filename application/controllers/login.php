<?php
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			if($this->session->userdata('logged_in') == TRUE)
			{
				redirect('dashboard');
			}


			if($this->session->userdata('user_privileges') == "admin")
			{
				redirect('login');
			}
		}

		// Main page
		function index()
		{
			$this->load->view('login');
		}

		// Function for checkUserData
		function checkUserData()
		{
			if($this->input->post('login'))
			{
				$this->m_login->checkDataToDatabase();
			}else
			{
				redirect($this);
			}
		}
	}
?>