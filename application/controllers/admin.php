<?php

class Admin extends CI_Controller {

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
            elseif($role==-1)
            {
                redirect('admin_home');
            }
            else
            {
                show_404();
            }

        }else{
        	$this->load->view('admin_login');
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
            $names=$is_valid[0]['name'];
            //print_r($is_valid);
			$data = array(
				'user_name' => $user_name,
                'user_id' => $user_id,
				'is_logged_in' => true,
                'role' => $role,
                'names'=>$names
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
            elseif($role==-1)
            {
                redirect('admin');
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
			$this->load->view('admin_login', $data);
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


    public function edit_user()
    {


        $phone=$this->input->post('phone');

        $user_id=$this->session->userdata('user_id');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $user_name=$this->input->post('user_name');

        $this->load->model('user_model');

        if($this->user_model->edit_user($phone,$password,$email,$user_name,$user_id))
        {
            $data['flash_message']=TRUE;

            $this->load->view('new_user', $data);
        }
    }


    public function login()
    {


        if (!is_logged_in()) {
            $this->load->view('admin_login');
        } else {


            $role = $this->session->all_userdata()['role'];

            if ($role == 0) {
                redirect('doctor');
            } elseif ($role == 1) {
                redirect('reception');
            } elseif ($role == 2) {
                redirect('lab');
            } elseif ($role == 3) {
                redirect('pharmacy');
            } elseif ($role == 4) {
                redirect('finance');
            } elseif($role==-1)
            {
                redirect('admin');
            }else {
                show_404();
            }

        }
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
    public function user_profile()
    {
        $user_id=$this->session->userdata('user_id');
        $this->load->model('user_model');
        $user=$this->user_model->get_user($user_id);
        $data['user']=$user[0];
        $this->load->view('user_profile',$data);
    }

}