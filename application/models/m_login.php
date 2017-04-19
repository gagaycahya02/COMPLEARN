<?php
	class M_Login extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		// Main Page
		function checkDataToDatabase()
		{
			$email = $this->input->post('user_email');
			$pwd = $this->input->post('user_password');

			$sql = "SELECT * FROM tbl_users WHERE user_email = '".$this->input->post('user_email')."' 
			AND user_password = '".$this->input->post('user_password')."'";
			
			$query = $this->db->query($sql);
			$row = $query->row_array();
			$getNumRows = $query->num_rows();

			if($getNumRows == 1)
			{
				if($row['user_privileges'] == "admin")
				{
					$data = array(
					'id_user' => $row['id_user'],
					'user_name' =>	$row['user_name'],
					'user_email' => $row['user_email'],
					'user_password' =>	$row['user_password'],
					'logged_in' => TRUE,
					'user_privileges' => $row['user_privileges']
					);

					$this->session->set_userdata($data);
					redirect('dashboard');
				}elseif($row['user_privileges'] == "user")
				{
					$data = array(
					'id_user' => $row['id_user'],
					'user_name' =>	$row['user_name'],
					'user_email' => $row['user_email'],
					'user_password' =>	$row['user_password'],
					'logged_in' => TRUE,
					'user_privileges' => $row['user_privileges']
					);
					$this->session->set_userdata($data);
					redirect('login');
				}
				
			}else
			{
				redirect('login');
			}
		}
	}
?>