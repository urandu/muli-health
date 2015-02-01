<?php

class User extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index()
	{
		if($this->session->userdata('is_logged_in')){
            $role=$this->session->userdata('role');
            if($role==0)
            {
                redirect('doctor');
            }
            elseif($role==1)
            {
                redirect('reception');
            }
            elseif($role==2)
            {
                redirect('lab');
            }
            elseif($role==3)
            {
                redirect('pharmacy');
            }
            elseif($role==4)
            {
                redirect('finance');
            }
            else
            {
                show_404();
            }

        }else{
        	$this->load->view('login');
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate()
	{	

		$this->load->model('user_model');

		$user_name = $this->input->post('user_name');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->user_model->validate($user_name, $password);
		
		if($is_valid)
		{

            $role=$is_valid[0]['role'];
            $user_id=$is_valid[0]['user_id'];
            //print_r($is_valid);
			$data = array(
				'user_name' => $user_name,
                'user_id' => $user_id,
				'is_logged_in' => true,
                'role' => $role
			);

            $this->session->set_userdata($data);

            if($role==0)
            {
                redirect('doctor');
            }
            elseif($role==1)
            {
                redirect('reception');
            }
            elseif($role==2)
            {
                redirect('lab');
            }
            elseif($role==3)
            {
                redirect('pharmacy');
            }
            elseif($role==4)
            {
                redirect('finance');
            }
            else
            {
                show_404();
            }

			//redirect('admin/products');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('login', $data);
		}
	}



    public function new_s()
    {

        $name=$this->input->post('name');
        $phone=$this->input->post('phone');
        $dob=$this->input->post('dob');
        $gender=$this->input->post('gender');
        $id_number=$this->input->post('id_number');
        $role=$this->input->post('role');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $user_name=$this->input->post('user_name');

        $this->load->model('user_model');

        if($this->user_model->new_user($name,$phone,$dob,$gender,$id_number,$role,$password,$email,$user_name))
        {
            $data['flash_message']=TRUE;

            $this->load->view('new_user', $data);
        }
    }



    public function login()
    {
        $this->load->view('login');
    }


	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

    public function new_user()
    {
        $this->load->view("new_user");
    }

}