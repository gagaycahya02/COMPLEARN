<?php 
	class Dashboard extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			if($this->session->userdata('logged_in') == FALSE)
			{
				redirect('login');
			}

			if($this->session->userdata('user_privileges') == "user")
			{
				//redirect('users/user_dashboard.php');
			}
		}

		function index()
		{
			$this->load->view('dashboard');
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
?>